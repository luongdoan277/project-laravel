@extends('homepage')

@section('main')
    @include('component.headerDetails')
    <section>
        <div class="title-payment text-center">
            Payment
        </div>
        <form action="{{route('createOrder')}}">
            <div class="row" style="padding: 0 40px">
                <div class="col-lg-5 left-payment">
                    <div class="list-product-payment">
                        <p style="font-size: 22px; font-weight: 600">My information</p>
                    </div>
                    <div style="margin-top: 30px; float: left; width: 100%">
                    @if(Auth::user())
                        <div class="form-block">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{Auth::user()->name}}" />
                        </div>
                        <div class="form-block">
                            <label for="phone">Phone number</label>
                            <input type="text" id="phone" name="phone_number" placeholder="Phone number" />
                        </div>
                        <div class="form-block">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="{{Auth::user()->email}}" />
                        </div>
                        <div class="form-block">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="Address"/>
                        </div>
                        <div class="form-block">
                            <label for="note">Note</label>
                            <textarea  name="note" class="textarea" id="note"></textarea>
                        </div>
                    @else
                        <div class="form-block">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Full name"/>
                        </div>
                        <div class="form-block">
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" id="phone" placeholder="Phone number"/>
                        </div>
                        <div class="form-block">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="example@gmail.com" />
                        </div>
                        <div class="form-block">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="Address"/>
                        </div>
                        <div class="form-block">
                            <label for="note">Note</label>
                            <textarea  name="note" class="textarea" id="note"></textarea>
                        </div>
                    @endif
                    </div>
                    <div class="list-product-payment">
                        <p style="font-size: 22px; font-weight: 600">Payment method</p>
                    </div>
                    <div>
                        <ul class="payments-method">
                            <li class="payment_method_bacs">
                                <input id = "Payment_method_bacs" type = "radio" class = "input-radio" name = "Payment_method" value = "1" />
                                <label for =  "Payment_method_bacs"> Thanh toán khi nhận hàng </label>
                                <div class = "Payment_box Payment_method_bacs" >
                                    Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng của mình thanh toán trực tiếp cho nhân  viên giao hàng
                                </div>
                            </li>
                            <li class="payment_method_cheque">
                                <input id = "Payment_method_cheque" type = "radio" class = "input-radio" name = "Payment_method" value = "0" />
                                <label for =  "Payment_method_cheque"> Chuyển khoản</label>
                                <div class = "Payment_box Payment_method_cheque">
                                    <p>Tên Tài khoản: Trường Đại học FPT</p>
                                    <p>Số tài khoản: 0011001803620</p>
                                    <p>Ngân hàng Thương mại Cổ phần Ngoại thương Việt Nam – Sở Giao dịch Hà Nội</p>
                                    <p>Nội dung: Thanh toán đơn hàng Mã số XXXXXXXXXX</p>
                                    <p>Phí chuyển tiền: Phí ngoài  (Người nộp chịu phí)</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button type="submit" style="
                                text-decoration: none;
                                background: #0B1218;
                                color: #fffbfb;
                                display: inline-block;
                                width: 100%;
                                padding: 10px 0;
                                text-align: center;
                                font-weight: 600;">
                            Create order
                        </button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="list-product-payment">
                        <p style="font-size: 22px; font-weight: 600">List Product ({{Session::get("Cart")->totalQty}})</p>
                    </div>
                    <div class="text">
                        <div class="product-payment"><b>Products</b></div>
                        <div class="description2-payment"><b>Name</b></div>
                        <div class="description1-payment"><b>Description</b></div>
                        <div class="quantity-payment"><b>Quantity</b></div>
                        <div class="price-payment"><b>Price</b></div>
                    </div>
                    <div class="cart1" style="background-color: white">
                        @if(Session::has("Cart") != null)
                            @foreach(Session::get("Cart")->products as $item)
                                <div class="item">
                                    <div class="img">
                                        <img src="images/{{$item['productInfo']->url_image}}" alt="" height="255px" width="220px">
                                    </div>
                                    <div class="title"><b>Besyana Tunic Blue</b></div>
                                    <div class="description-payment">
                                        <p>{{$item['productInfo']->description}}</p>
                                    </div>
                                    <div class="count1">
                                        {{--                <input type="button" onclick="minus()" value="-" class="input-button">--}}
                                        {{--                <input type="text" value="1" class="textbox" style="width: 40px; padding: 3px 6px">--}}
                                        {{--                <input type="button" onclick="plus()" value="+" class="input-button">--}}

                                        <div class="TotalContainer" style="border: none">
                                            {{--                    <span class="dec qtybtn">-</span>--}}
                                            <p>{{$item['qty']}}</p>
                                            {{--                    <span class="inc qtybtn">+</span>--}}
                                        </div>

                                    </div>
                                    <div class="price2"><p>${{number_format($item['productInfo']->price)}}</p></div>
                                </div>
                            @endforeach
                                <div class="total" style="margin-top:10px;border-top: 2px solid #676767;">
                                    <p style="font-weight: 600;font-size: 18px;float: left; ">Subtotal :</p>
                                    <span style="font-size: 22px;font-weight: 700;color: #e2b86b;text-align: right">${{number_format(Session::get("Cart")->totalPrice)}}</span>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </section>
    @include('component.footer')
@endsection

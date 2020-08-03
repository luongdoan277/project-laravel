@extends('Cart.cart')

@section('content')
    @include('Cart.header')
    <div class="container">
        <div class="check-out text-center">
            Checkout
        </div>
        <div class="col-md-9 border-left">
            <div class="text">
                <div class="product"><b>Products</b></div>
                <div class="description"><b>Description</b></div>
                <div class="quantity"><b>Quantity</b></div>
                <div class="price"><b>Price</b></div>
                <div class="remove"><b>Remove</b></div>
            </div>

            <div class="cart">
                <div class="img">
                    <img src="{{asset('images/products.jpeg')}}" alt="" height="255px" width="220px">
                </div>
                <div class="title"><b>Besyana Tunic Blue</b></div>
                <div class="count">
                    <div class="pro-qty">
                        <input type="text" value="1" style="width: 40px; height: 34px;text-align: center">
                    </div>
                </div>
                <div class="price1"><b>Rp 195.000</b></div>
                <div class="icon-remove"><a href=""><i class="fas fa-trash" style="color: black"></i></a></div>
            </div>

            <div class="cart">
                <div class="img"><img src="{{asset('images/products.jpeg')}}" alt="" height="255px" width="220px"></div>
                <div class="title"><b>Besyana Tunic Blue</b></div>
                <div class="count">
                    <div class="pro-qty">
                        <input type="text" value="1" style="width: 40px; height: 34px;text-align: center">
                    </div>
                </div>
                <div class="price1"><b>Rp 195.000</b></div>
                <div class="icon-remove"><a href=""><i class="fas fa-trash" style="color: black"></i></a></div>
            </div>

        </div>
        <div class="col-md-3 border-right">
            <div>
                <div class="subtotal">
                    <p style="float: left">Subtotal</p>
                    <p style="float: right">Rp 195.000</p>
                </div>
                <div class="subtotal">
                    <p style="float: left">Tax</p>
                    <p style="float: right">Rp 195.000</p><br/>
                    <hr/>
                </div>
            </div>
            <div class="subtotal">
                <p style="float: left">TOTAL PAYMENT</p>
                <p style="float: right;color: orange">Rp 195.000</p>
            </div>
            <button type="button" class="payment" data-toggle="modal" data-target="#myModal">
                <h6 class="text-center" style="color: white">Pay Now</h6>
            </button>


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModal">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="task" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="name" id="task-name" class="form-control" placeholder="Name...">
                                    </div><br/>
                                    <label for="task" class="col-sm-3 control-label">Telephone Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="price" id="task-price" class="form-control" placeholder="Telephone number ...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Chọn tỉnh thành ...</option>
                                                <option value="1">Thai Binh</option>
                                                <option value="2">Ha Noi</option>
                                                <option value="3">Thanh Hoa</option>
                                                <option value="4">Hai Phong</option>
                                                <option value="5">Nghe An</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Quận / Huyện...</option>
                                                <option value="1">Thai Binh</option>
                                                <option value="2">Ha Noi</option>
                                                <option value="3">Thanh Hoa</option>
                                                <option value="4">Hai Phong</option>
                                                <option value="5">Nghe An</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Phường / Xã ...</option>
                                                <option value="1">Thai Binh</option>
                                                <option value="2">Ha Noi</option>
                                                <option value="3">Thanh Hoa</option>
                                                <option value="4">Hai Phong</option>
                                                <option value="5">Nghe An</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 20px">
                                    <div class="col-sm-8">
                                        <input type="text" name="name" id="task-name" class="form-control" placeholder="Nhập địa chỉ chi tiết ...">
                                    </div><br/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer')
@endsection


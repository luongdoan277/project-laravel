@extends('homepage')

@section('main')
    @include('component.headerDetails')
    <div class="check-out-list">
        <div class="check-out text-center">
            Checkout
        </div>
        <div class="col-md-9 list-product-checkout">
            <div class="text">
                <div class="product-checkout"><b>Products</b></div>
                <div class="description-checkout"><b>Name</b></div>
                <div class="quantity-checkout"><b>Quantity</b></div>
                <div class="price-checkout"><b>Price</b></div>
                <div class="save-checkout"><b>Save</b></div>
                <div class="remove-checkout"><b>Remove</b></div>
            </div>
            <div class="cart1" id="list-item-cart">
                @include('component.list-checkout')
            </div>
        </div>
        <div class="col-md-3 border-right" >
            @if(Session::has("Cart") != null)
                <div>
                    <div class="subtotal">
                        <p style="float: left; font-weight: 700">Subtotal</p>
                        <p style="float: right">${{number_format(Session::get("Cart")->totalPrice)}}</p>
                    </div>
                    <div class="subtotal">
                        <p style="float: left; font-weight: 700">Tax</p>
                        <p style="float: right">0</p><br/>
                        <hr/>
                    </div>
                </div>
                <div class="subtotal">
                    <p style="float: left; font-weight: 700; color: orange;">TOTAL PAYMENT</p>
                    <p style="float: right;color: orange">${{number_format(Session::get("Cart")->totalPrice)}}</p>
                </div>
            @elseif(Session::has("Cart") == null)
                <div>
                    <div class="subtotal">
                        <p style="float: left; font-weight: 700">Subtotal</p>
                        <p style="float: right">0</p>
                    </div>
                    <div class="subtotal">
                        <p style="float: left; font-weight: 700">Tax</p>
                        <p style="float: right">0</p><br/>
                        <hr/>
                    </div>
                </div>
                <div class="subtotal">
                    <p style="float: left; font-weight: 700; color: orange;">TOTAL PAYMENT</p>
                    <p style="float: right;color: orange">0</p>
                </div>
            @endif
            <a href="{{route('review-order')}}" class="btn payment">
                <h6 class="text-center" style="color: white">Pay Now</h6>
            </a>
        </div>
    </div>
    @include('component.footer')
@endsection


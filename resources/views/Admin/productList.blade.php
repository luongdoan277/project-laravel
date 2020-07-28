@extends('Admin.admin')

@section('admin')
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
                    <input type="button" onclick="plus()" value="+" class="input-button">
                    <input type="text" value="1" id="textbox" style="width: 40px; padding: 3px 6px">
                    <input type="button" onclick="minus()" value="-" class="input-button">
                </div>
                <div class="price1"><b>Rp 195.000</b></div>
                <div class="icon-remove"><a href=""><i class="fas fa-trash" style="color: black"></i></a></div>
            </div>

            <div class="cart">
                <div class="img"><img src="{{asset('images/products.jpeg')}}" alt="" height="255px" width="220px"></div>
                <div class="title"><b>Besyana Tunic Blue</b></div>
                <div class="count">
                    <input type="button" onclick="plus()" value="+" class="input-button">
                    <input type="text" value="1" id="textbox" style="width: 40px; padding: 3px 6px">
                    <input type="button" onclick="minus()" value="-" class="input-button">
                </div>
                {{--            <div class="shopping-cart">--}}
                {{--                <div>--}}
                {{--                    <span class="increase">-</span>--}}
                {{--                    <span class="value">1</span>--}}
                {{--                    <span class="reduction">+</span>--}}
                {{--                </div>--}}
                {{--            </div>--}}
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
            <div class="payment">
                <a><h6 class="text-center" style="color: white">Pay Now</h6></a>
            </div>
        </div>
    </div>
    @include('component.footer')
@endsection

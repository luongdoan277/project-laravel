<header>
<div class="navbar-detail">
    <div class="navlink-productdetails">
        <div class="link-productdetails">
            <div class="logo-productdetails">
                <a href="/">
                    <img src="{{asset('images/logo1.png')}}" alt="">
                </a>
            </div>
            <ul class="link-page-product">
                <li><a href="{{url('/')}}" class="links-product">Home</a></li>
                <li><a href="#" class="links-product ">About Us</a></li>
                <li><a href="#" class="links-product">Contact</a></li>
                <li><a href="{{route('searchOrder')}}" class="links-product active">My Order</a></li>
                <li><a href="#" class="links-product ">Product</a></li>
                <li><a href="#" class="links-product links-hamburger">Sign In <i class="fas fa-sign-in-alt"></i></a></li>
            </ul>
        </div>
        <div class="search-home-product">
            <form action="" method="get" class="form-control-product">
                <input type="text" name="product">
                <a href=""><i class="fas fa-search"></i></a>
            </form>
        </div>
        <div class="cart-in">
            <div class="cart">
                <i class="fas fa-shopping-bag"></i>
                @if(Session::has("Cart") != null)
                    <p id="total-quantity-show">{{Session::get("Cart")->totalQty}}</p>
                @else
                    <p id="total-quantity-show">0</p>
                @endif
            </div>
            <div class="sign-in">
                @if(!Auth::user())
                    <a href="{{route('getlogin')}}">Sign In</a>
                @elseif(Auth::user())
                    <a href="{{route('logout')}}">Logout<i class="fas fa-sign-out-alt" style="padding-left: 6px"></i></a>
                @endif
            </div>
        </div>
        <div class="cart-checkout">
            <div class="square"></div>
            <div class="checkout">
                <div class="head-checkout">
                    <p>Your Shopping Cart</p>
                </div>
                <div id="change-item-cart">
                    {{--                        <p style="height: 431px; text-align: center; padding-top: 50%"><b style="color: #949494">Your cart is empty</b></p>--}}
                    @if(Session::has("Cart") != null)
                        <div class="content-checkout" id="style-1">
                            @foreach(Session::get("Cart")->products as $item)
                                <div class="items">
                                    <div class="image-items">
                                        <img src="/images/{{$item['productInfo']->url_image}}" alt="">
                                    </div>
                                    <div class="description">
                                        <a href="{{route('product.show', $item['productInfo']->id)}}">{{$item['productInfo']->name}}</a>
                                        <p>${{number_format($item['productInfo']->price)}}</p>
                                        <p>Amount: {{$item['qty']}}</p>
                                        <form class="delete-items">
                                            <i class="fas fa-trash-alt btn" data-id="{{$item['productInfo']->id}}"></i>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="total">
                            <p>Subtotal :</p>
                            <span>${{number_format(Session::get("Cart")->totalPrice)}}</span>
                        </div>
                        {{--    {{dd($newCart)}}--}}
                    @elseif(Session::has("Cart") == null)
                        <p style="height: 431px; text-align: center; padding-top: 50%"><b style="color: #949494">Your cart is empty</b></p>
                    @endif
                </div>
                <div class="go-checkout">
                    <a href="{{route('checkout')}}">Go to Checkout</a>
                </div>
            </div>
        </div>
        <div class="menu-hamburger-product">
            <div class="line" id="line1"></div>
            <div class="line" id="line2"></div>
            <div class="line" id="line3"></div>
        </div>
    </div>
</div>
</header>

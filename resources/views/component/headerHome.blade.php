<header>
    <div class="navbars">
        <div class="nav-links">
            <div class="link">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('images/logo1.png')}}" alt="">
                    </a>
                </div>
                <ul class="link-page">
                    <li><a href="{{url('/')}}" class="links active">Home</a></li>
                    <li><a href="#" class="links ">About Us</a></li>
                    <li><a href="#" class="links">Contact</a></li>
                    <li><a href="#" class="links">Blogs</a></li>
                    <li><a href="#" class="links">Product</a></li>
                    <li><a href="#" class="links links-hamburger">Space<i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
            </div>
            <div class="search-home">
                <form action="" method="get" class="form-control-home">
                    <input type="text" name="product">
                    <button type="submit"><i class="fas fa-search"></i></button>
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
                    <a href="{{route('getlogin')}}">Sign In</a>
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
                                            <img src="images/{{$item['productInfo']->url_image}}" alt="">
                                        </div>
                                        <div class="description">
                                            <a href="{{ route('product.show', $item['productInfo']->id)}}">{{$item['productInfo']->name}}</a>
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
            <div class="menu-hamburger">
                <div class="line" id="line1"></div>
                <div class="line" id="line2"></div>
                <div class="line" id="line3"></div>
            </div>
        </div>
        <div class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/slide-6img.jpeg')}}" alt="First slide">
                        <div class="d-none d-md-block slide-content">
                            <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                            <span>Raya Hampers-May 2020</span>
                            <a href="{{route('category.index')}}">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/slide-1.jpeg')}}" alt="Second slide" >
                        <div class="d-none d-md-block slide-content" style="left: 52%">
                            <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                            <span>Raya Hampers-May 2020</span>
                            <a href="{{route('category.index')}}">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/slide8img.jpeg')}}" alt="Third slide">
                        <div class="d-none d-md-block slide-content" style="left: 35%">
                            <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                            <span>Raya Hampers-May 2020</span>
                            <a href="{{route('category.index')}}">Shop Now</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="z-index: -5">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="z-index: -5">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</header>

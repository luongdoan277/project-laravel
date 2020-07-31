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
                    <p>1</p>
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
                    <div class="content-checkout" id="style-1">
                        <div class="items">
                            <div class="image-items">
                                <img src="{{asset('images/dogdetails.png')}}" alt="">
                            </div>
                            <div class="description">
                                <a href="">Ikana Loose Dress Grey</a>
                                <p>$92.0</p>

                                <form class="delete-items">
                                    <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="items">
                            <div class="image-items">
                                <img src="{{asset('images/dogdetails.png')}}" alt="">
                            </div>
                            <div class="description">
                                <a href="">Ikana Loose Dress Grey</a>
                                <p>$92.0</p>

                                <form class="delete-items">
                                    <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="items">
                            <div class="image-items">
                                <img src="{{asset('images/dogdetails.png')}}" alt="">
                            </div>
                            <div class="description">
                                <a href="">Ikana Loose Dress Grey</a>
                                <p>$92.0</p>

                                <form class="delete-items">
                                    <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="total-price">
                        <div class="total">
                            <p>Subtotal :</p>
                            <span>$122.0</span>
                        </div>
                        <div class="go-checkout">
                            <a href="">Go to Checkout</a>
                        </div>
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

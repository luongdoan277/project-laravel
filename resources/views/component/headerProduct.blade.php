<header>
    <div class="navbar-listproduct">
        <div class="nav-links-product">
            <div class="link-product">
                <div class="logo-product">
                    <a href="/">
                        <img src="{{asset('images/logo1.png')}}" alt="">
                    </a>
                </div>
                <ul class="link-page-product">
                    <li><a href="{{url('/')}}" class="links-product">Home</a></li>
                    <li><a href="#" class="links-product ">About Us</a></li>
                    <li><a href="#" class="links-product">Contact</a></li>
                    <li><a href="#" class="links-product">Blogs</a></li>
                    <li><a href="#" class="links-product active">Product</a></li>
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
                    <a href="#">
                        <i class="fas fa-shopping-bag"></i>
                    </a>
                    <p>1</p>
                </div>
                <div class="sign-in">
                    <a href="">Sign In</a>
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
            <div class="menu-hamburger-product">
                <div class="line" id="line1"></div>
                <div class="line" id="line2"></div>
                <div class="line" id="line3"></div>
            </div>
        </div>
        <div class="image-list-product">
            @yield('image-content')
        </div>
    </div>
</header>

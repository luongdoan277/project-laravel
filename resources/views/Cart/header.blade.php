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
                </div>
                <div class="sign-in">
                    <a href="loginss.html">Sign In</a>
                </div>
            </div>
            <div class="menu-hamburger-product">
                <div class="line" id="line1"></div>
                <div class="line" id="line2"></div>
                <div class="line" id="line3"></div>
            </div>
        </div>
{{--        <div class="image-list-product">--}}
{{--            @yield('image')--}}
{{--            <div class="content-listproduct">--}}
{{--                <p>Hats</p>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</header>

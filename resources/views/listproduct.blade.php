<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
</head>
<body>
<header>
    <div class="navbar-listproduct">
        <div class="nav-links-product">
            <div class="link-product">
                <div class="logo-product">
                    <a href="{{url('/')}}">
                        <img src="{{asset('images/logo1.png')}}" alt="">
                    </a>
                </div>
                <ul class="link-page-product">
                    <li><a href="{{url('/')}}" class="links-product">Home</a></li>
                    <li><a href="#" class="links-product ">About Us</a></li>
                    <li><a href="#" class="links-product">Contact</a></li>
                    <li><a href="#" class="links-product">Blogs</a></li>
                    <li><a href="{{url('listproduct')}}" class="links-product active">Product</a></li>
                    <li><a href="{{url('login')}}" class="links-product links-hamburger">Sign In <i class="fas fa-sign-in-alt"></i></a></li>
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
                    <a href="{{url('login')}}">Sign In</a>
                </div>
            </div>
            <div class="menu-hamburger-product">
                <div class="line" id="line1"></div>
                <div class="line" id="line2"></div>
                <div class="line" id="line3"></div>
            </div>
        </div>
        <div class="image-list-product">
            <img src="{{asset('images/listproduct.jpeg')}}" alt="image list product">
            <div class="content-listproduct">
                <p>Product</p>
            </div>
        </div>
    </div>
</header>
<main>
        <div class="product-details">
            <ul class="page">
                <li><a href="#" class="links-details">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li><a href="#" class="links-details active-details">Product</a></li>
            </ul>
            <div class="listproduct-details">
                <div class="main-product">
                    <div class="title-body-product">
                        <p>Sneaker</p>
                        <a href="{{url('sneaker')}}">View All Products</a>
                    </div>
                    <div class="list-product">
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-product">
                    <div class="title-body-product">
                        <p>Hats</p>
                        <a href="{{url('hats')}}">View All Product</a>
                    </div>
                    <div class="list-product">
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-product">
                    <div class="title-body-product">
                        <p>Men</p>
                        <a href="{{url('men')}}">View All Product</a>
                    </div>
                    <div class="list-product">
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-product">
                    <div class="title-body-product">
                        <p>Women</p>
                        <a href="{{url('women')}}">View All Product</a>
                    </div>
                    <div class="list-product">
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-product">
                    <div class="title-body-product">
                        <p>Jackets</p>
                        <a href="{{url('jacket')}}">View All Product</a>
                    </div>
                    <div class="list-product">
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="{{asset('images/products.jpeg')}}" alt="">
                                </div>
                                <div class="addTo">
                                    <a href="">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span>Air Jordan </span>
                                <p>$36</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="footer">
        <div class="berryberri">
            <div class="logo-footer">
                <a href="">
                    <img src="{{asset('images/logo1.png')}}" alt="">
                </a>
            </div>
            <div class="content-footer">
            <span>As Asia’s Online Fashion Destination, we create endless style possibilities
                through an ever-expanding range of products form the most coveted international
                and local brands, putting you at the centre of it all.<strong> With BerryBerri, You Own Now.</strong></span>
            </div>
            <div class="find-us">
                <p>Find On Us</p>
                <div class="icon">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="customer-services">
            <p>Customer Services</p>
            <div class="list-content">
                <a href="">FAQ</a>
                <a href="">Return</a>
                <a href="">Product Index</a>
                <a href="">Fashion Glossary</a>
                <a href="">Order Tracking</a>
            </div>
        </div>
        <div class="customer-services">
            <p>About BerryBerri</p>
            <div class="list-content">
                <a href="">Promotion</a>
                <a href="">Return</a>
                <a href="">Product Index</a>
                <a href="">Fashion Glossary</a>
                <a href="">Order Tracking</a>
            </div>
        </div>
        <div class="news">
            <p>New To BerryBerri</p>
            <span>
            Get a <strong style="color: #f5cb5f">Rp 75.000</strong> Voucher (plus the latest fashion news and product launches) just by subscribing to our newsletter.
        </span>
            <div class="form">
                <div class="title-address">
                    <p>Your email address</p>
                </div>
                <form action="" class="form-control">
                    <input type="text" name="address">
                </form>
                <div class="sex">
                    <a href="">
                        Female
                    </a>
                    <a href="" class="male">
                        Male
                    </a>
                </div>
                <div class="privacy">
                    <a href="">
                        Privacy
                    </a>
                    <a href="">
                        Team of Services
                    </a>
                </div>
                <span>@2020 BerryBerri</span>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{asset('js/home.js')}}"></script>
<script src="{{asset('js/menu-hamburgerProduct.js')}}"></script>
</body>
</html>



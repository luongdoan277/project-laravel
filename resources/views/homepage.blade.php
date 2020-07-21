<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
    <link rel="icon" href="{{asset('image/logo2.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
{{--Header--}}
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
                    <li><a href="{{url('listproduct')}}" class="links">Product</a></li>
                    <li><a href="{{url('login')}}" class="links links-hamburger">Sign In <i class="fas fa-sign-in-alt"></i></a></li>
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
                    <a href="{{url('cart')}}">
                        <i class="fas fa-shopping-bag"></i>
                    </a>
                    <p>1</p>
                </div>
                <div class="sign-in">
                    <a href="{{route('login')}}">Sign In</a>
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
                            <a href="{{url('listproduct')}}">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/slide-1.jpeg')}}" alt="Second slide" >
                        <div class="d-none d-md-block slide-content" style="left: 52%">
                            <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                            <span>Raya Hampers-May 2020</span>
                            <a href="{{url('listproduct')}}">Shop Now</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/slide8img.jpeg')}}" alt="Third slide">
                        <div class="d-none d-md-block slide-content" style="left: 35%">
                            <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                            <span>Raya Hampers-May 2020</span>
                            <a href="{{url('listproduct')}}">Shop Now</a>
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

{{--Main--}}
<main>
    <div class="main">
        <div class="title-body">
            <p>Shop By Categories</p>
        </div>
        <div class="directory-menu">
            <div class="menu-items">
                <img src="{{asset('images/hats.png')}}" alt="">
                <div class="content">
                    <a href="{{url('hats')}}">
                        <p>
                            Hats
                        </p>
                        <span>Shop Now</span>
                    </a>
                </div>
            </div>
            <div class="menu-items">
                <img src="{{asset('images/jackets.jpeg')}}" alt="">
                <div class="content">
                    <a href="{{url('jacket')}}">
                        <p>
                            Jackets
                        </p>
                        <span>Shop Now</span>
                    </a>
                </div>
            </div>
            <div class="menu-items">
                <img src="{{asset('images/sneaker.jpeg')}}" alt="">
                <div class="content">
                    <a href="{{url('sneaker')}}">
                        <p>
                            Sneaker
                        </p>
                        <span>Shop Now</span>
                    </a>
                </div>
            </div>
            <div class="menu-items">
                <img src="{{asset('images/men.png')}}" alt="">
                <div class="content">
                    <a href="{{url('men')}}">
                        <p>
                            Mens
                        </p>
                        <span>Shop Now</span>
                    </a>
                </div>
            </div>
            <div class="menu-items">
                <img src="{{asset('images/womens.png')}}" alt="">
                <div class="content">
                    <a href="{{url('women')}}">
                        <p>
                            Womens
                        </p>
                        <span>Shop Now</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-product">
        <div class="title-body">
            <p>Best Seller</p>
        </div>
        <div class="list-product">
            <div class="product">
                <div class="them">
                    <div class="image-product">
                        <img src="{{asset('images/products.jpeg')}}" alt="">
                    </div>
                    <div class="check-product">
                        <a href="" class="check"><i class="fas fa-info-circle"></i></a>
                    </div>
                    <div class="addTo">
                        <a href="" class="add">Add To Cart</a>
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
                    <div class="check-product">
                        <a href="" class="check"><i class="fas fa-info-circle"></i></a>
                    </div>
                    <div class="addTo">
                        <a href="" class="add">Add To Cart</a>
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
                    <div class="check-product">
                        <a href="" class="check"><i class="fas fa-info-circle"></i></a>
                    </div>
                    <div class="addTo">
                        <a href="" class="add">Add To Cart</a>
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
                    <div class="check-product">
                        <a href="" class="check"><i class="fas fa-info-circle"></i></a>
                    </div>
                    <div class="addTo">
                        <a href="" class="add">Add To Cart</a>
                    </div>
                </div>
                <div class="price">
                    <span>Air Jordan </span>
                    <p>$36</p>
                </div>
            </div>
        </div>
    </div>
</main>
{{--Footer--}}
<footer>
    <div class="footer">
        <div class="berryberri">
            <div class="logo-footer">
                <a href="">
                    <img src="{{URL::asset('images/logo1.png')}}" alt="">
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
<script src="{{asset('js/menu-hamburger.js')}}"></script>

</body>
</html>

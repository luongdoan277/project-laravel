<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <link rel="stylesheet" href="{{asset('css/productdetails.css')}}">
    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
</head>
<body>
<header>
    <div class="navbar-details">
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
    </div>
</header>
<main>
    <div class="main-details">
        <div class="product-details">
            <div class="image-details">
                <img src="{{asset('images/corgi.png')}}"  alt="">
            </div>
            <div class="information-product">
                <div class="title-details">
                    <p>Fucking Dog</p>
                </div>
                <div class="price-details">
                    <p>$92</p>
                </div>
                <div class="option-detail">
                   <div class="option-color">
                       <p>Color : </p>
                       <select name="" id="" class="color">
                           <option value="">Red</option>
                           <option value="">Blue</option>
                           <option value="">Yellow</option>
                           <option value="">Green</option>
                       </select>
                   </div>
                    <div class="option-size">
                        <p>Size : </p>
                        <select name="" id="" class="size">
                            <option value="">42</option>
                            <option value="">43</option>
                            <option value="">44</option>
                            <option value="">39</option>
                        </select>
                    </div>
                </div>
                <ul class="description">
                    <li>Origin: America</li>
                    <li>Material: Lorem lored</li>
                    <li>Distribution: America,China,India,VietNam,...</li>
                </ul>
                <div class="addToCart">
                    <button class="add">Add To Cart</button>
                </div>
                <div class="content-details">
                    <p>Tatto Together: Said I'd never fall, I'd never fall
                        I'd never fall, but then I fell for you, mm
                        Back against the wall, against the wall
                        Against the wall, that's how it felt with you, mm, mm</p>
                </div>
                <div class="share">
                    <p>Share</p>
                    <ul class="social-network">
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="related-product">
                <div class="title-related">
                    <p>Related Product</p>
                </div>
                <div class="list-related">
                    <div class="product">
                        <div class="them">
                            <div class="image-product">
                                <img src="{{asset('images/dog.png')}}" alt="">
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
                                <img src="{{asset('images/dog.png')}}" alt="">
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
                                <img src="{{asset('images/dog.png')}}" alt="">
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
                                <img src="{{asset('images/dog.png')}}" alt="">
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
</main>
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
<script src="{{asset('js/menu-hamburgerProduct.js')}}"></script>
</body>
</html>

@extends('layouts.mainProducts')

@section('image-content')
    <img src="{{asset('images/sneaker-product.jpeg')}}" alt="image list product">
    <div class="content-listproduct">
        <p>Sneaker</p>
    </div>
@endsection

@section('content')
    @include('component.headerProduct')
    <main>
        <div class="product-details">
            <ul class="page">
                <li><a href="#" class="links-details">Home</a></li>
                <li><i class="fas fa-angle-double-right"></i></li>
                <li><a href="#" class="links-details active-details">Product</a></li>
            </ul>
            <div class="option-product">
                <div class="option-details">
                    <ul class="display-page">
                        <li><a href=""><i class="fas fa-list-ul option_logo"></i></a></li>
                        <li><a href=""><i class="fas fa-th-large option_logo"></i></a></li>
                    </ul>
                    <div class="option-price">
                        <p>Sort By : </p>
                        <select name="" class="select-product">
                            <option value="">$36</option>
                            <option value="">$24</option>
                            <option value="">$122</option>
                            <option value="">$300</option>
                            <option value="">$500</option>
                        </select>
                    </div>
                </div>
                <div class="number-items">
                    <p>224 items</p>
                </div>
                <ul class="change-page">
                    <li><a href="" class="pre-page"><i class="fas fa-angle-left"></i></a></li>
                    <li><a href="#" class="links-changepage active-page">1</a></li>
                    <li><a href="#" class="links-changepage">2</a></li>
                    <li><a href="#" class="links-changepage">3</a></li>
                    <li><a href="#" class="links-changepage">4</a></li>
                    <li><a href="#" class="links-changepage">5</a></li>
                    <li><a href="#" class="links-changepage">6</a></li>
                    <li><a href="" class="next-page"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
            <div class="listproduct-details">
                <div class="main-product">
                    <div class="title-body-product">
                        <p>Sneaker</p>
                        <a href="{{url('listproduct')}}">Back to product page</a>
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

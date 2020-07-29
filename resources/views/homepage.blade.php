@extends('layouts.mainHome')

<<<<<<< Updated upstream
</head>
<body>

    @yield('main')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{asset('js/home.js')}}"></script>
<script src="{{asset('js/menu-hamburger.js')}}"></script>

</body>
</html>
=======
@section('content')
    @include('component.headerHome')
    <main>
        <div class="main">
            <div class="title-body">
                <p>Shop By Categories</p>
            </div>
            <div class="directory-menu">
                <div class="menu-items">
                    <img src="{{asset('images/hats.png')}}" alt="">
                    <div class="content">
                        <a href="{{route('hats.index')}}">
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
                        <a href="{{route('jacket.index')}}">
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
                        <a href="{{route('men.index')}}">
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
                        <a href="{{route('women.index')}}">
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
                            <a href="{{route('detail.index')}}" class="check"><i class="fas fa-info-circle"></i></a>
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
                            <a href="{{route('detail.index')}}" class="check"><i class="fas fa-info-circle"></i></a>
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
                            <a href="{{route('detail.index')}}" class="check"><i class="fas fa-info-circle"></i></a>
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
                            <a href="{{route('detail.index')}}" class="check"><i class="fas fa-info-circle"></i></a>
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
    @include('component.footer')
@endsection
>>>>>>> Stashed changes

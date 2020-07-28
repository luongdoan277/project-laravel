@include('homepage')

@section('main')
    @include('component.headerDetails')
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

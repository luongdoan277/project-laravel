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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
                        <a href="#">
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
                @foreach($ProductSeller as $seller)
                    @csrf
                    <div class="product">
                        <div class="them">
                            <div class="image-product">
                                <img src="images/{{$seller->url_image}}" alt="">
                            </div>
                            <div class="check-product">
                                <a href="" class="check"><i class="fas fa-info-circle"></i></a>
                            </div>
                            <div class="addTo">
                                <a href="" class="add">Add To Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <span>{{$seller->product_name}}</span>
                            <p>{{$seller->price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('component.footer')
@endsection

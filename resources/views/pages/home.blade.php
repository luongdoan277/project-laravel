@extends('homepage')

@section('main')
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
                @foreach($ProductSeller as $product)
                    @csrf
                    <div class="product">
                        <div class="them">
                            <div class="image-product">
                                <img src="images/{{$product->url_image}}" alt="">
                            </div>
                            <div class="check-product">
                                <a href="{{ route('product.show', $product->id)}}" class="check"><i class="fas fa-info-circle"></i></a>
                            </div>
                            <div class="addTo">
                                <a onclick="addToCart({{$product->id}})" href="javascript:" class="add">Add To Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <span>{{$product->name}}</span>
                            <p>$ {{$product->price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('component.footer')
@endsection

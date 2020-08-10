@extends('homepage')

@section('main')
    @include('component.headerDetails')
    <main>
        <div class="main-details">
            <div class="product-details">
                @csrf
                <div class="image-details">
                    <img src="/images/{{$product->url_image}}"  alt="">
                </div>
                <div class="information-product">
                    <div class="title-details">
                        <p>{{$product->name}}</p>
                    </div>
                    <div class="price-details">
                        <p>$ {{$product->price}}</p>
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
                        <a onclick="addToCart({{$product->id}})" href="javascript:">
                            <button class="add">Add To Cart</button>
                        </a>
                    </div>
                    <div class="content-details">
                        <p>
                            {{$product->description}}
                        </p>
                    </div>
                    <div class="share">
                        <p>Share</p>
                        <ul class="social-network">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
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
                <div class="list-product">
                    @foreach($TopProduct as $products)
                        @csrf
                        <div class="product">
                            <div class="them">
                                <div class="image-product">
                                    <img src="/images/{{$products->url_image}}" alt="">
                                </div>
                                <div class="check-product">
                                    <a href="{{ route('product.show', $products->id)}}" class="check"><i class="fas fa-info-circle"></i></a>
                                </div>
                                <div class="addTo">
                                    <a onclick="addToCart({{$products->id}})" href="javascript:" class="add">Add To Cart</a>
                                </div>
                            </div>
                            <div class="price">
                                <span><a href="{{route('product.show', $products->id)}}">{{$products->name}}</a></span>
                                <p>{{$products->price}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @include('component.footer')
@endsection

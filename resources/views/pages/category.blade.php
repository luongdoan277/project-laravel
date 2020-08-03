@extends('homepage')

@section('image')
    <img src="{{asset('images/listproduct.jpeg')}}" alt="image list product">
@endsection

@section('main')
    @include('component.headerDetails')
    <main>
        <div class="product-details">
            <div class="listproduct-details">
                <div class="main-product">
                        @csrf
                        <div class="title-body-product">
                            <p>{{$categories->name}}</p>
                        </div>
                        <div class="list-product">
                            @foreach($categories->products as $product)
                                <div class="product">
                                    <div class="them">
                                        <div class="image-product">
                                            <img src="/images/{{$product->url_image}}" alt="">
                                        </div>
                                        <div class="check-product">
                                            <a href="{{ route('product.show', $product->id)}}" class="check"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                        <div class="addTo">
                                            <a href="{{ url('add-to-cart/'.$product->id) }}" class="add">Add To Cart</a>
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
            </div>
        </div>
    </main>
    @include('component.footer')
@endsection

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
                    @foreach($AllCategory as $category)
                        <div class="title-body-product">
                            <p>{{$category->name}}</p>
                            <a href="{{ route('category.show', $category->category_id)}}">View All Products</a>
                        </div>
                        <div class="list-product">
                            @foreach($category->products->take(4) as $product)
                            <div class="product">
                                <div class="them">
                                    <div class="image-product">
                                        <img src="images/{{$product->url_image}}" alt="">
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
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    @include('component.footer')
@endsection

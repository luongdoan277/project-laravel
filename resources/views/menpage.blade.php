@extends('layouts.mainProducts')

@section('image')
    <img src="{{asset('images/men-products.jpeg')}}" alt="image list product">
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
                        <p>Men</p>
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
    </main>
    @include('component.footer')
@endsection

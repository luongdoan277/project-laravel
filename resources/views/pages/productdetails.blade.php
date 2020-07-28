@extends('homepage')

@section('main')
    @include('component.headerDetails')
    <main>
        <div class="main-details">
            <div class="product-details">
                <div class="image-details">
                    <img src="{{asset('images/dogdetails.png')}}"  alt="">
                </div>
                <div class="information-product">
                    <div class="title-details">
                        <p>Lancaster signature</p>
                    </div>
                    <div class="price-details">
                        <p>$92.00</p>
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
    @include('component.footer')
@endsection

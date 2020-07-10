@extends('layouts.header')

@section('slider')
    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('images/slide-1.jpeg')}}" alt="First slide">
                    <div class="d-none d-md-block slide-content">
                        <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                        <span>Raya Hampers-May 2020</span>
                        <a href="">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('images/slide8img.jpeg')}}" alt="Second slide" >
                    <div class="d-none d-md-block slide-content" style="left: 52%">
                        <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                        <span>Raya Hampers-May 2020</span>
                        <a href="">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{URL::asset('images/slide-6img.jpeg')}}" alt="Third slide">
                    <div class="d-none d-md-block slide-content" style="left: 35%">
                        <p>Make your style more fashionable in Raya Days with BerryBerri</p>
                        <span>Raya Hampers-May 2020</span>
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

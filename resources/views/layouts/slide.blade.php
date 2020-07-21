<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/homePagePHP.css')}}">
    <link rel="stylesheet" href="{{URL::asset('FontAwesome/css/all.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{URL::asset('js/home.js')}}"></script>
</body>
</html>

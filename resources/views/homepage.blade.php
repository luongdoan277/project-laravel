<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
{{--    <link rel="stylesheet" href="{{asset('sass/home.scss')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">--}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<header>
    <nav class="navbars">
{{--        Navigation--}}
        @extends('layouts.navLinks')

{{--        Slider--}}
        @extends('layouts.slide')
    </nav>
</header>
   <main>
       <div class="main">
           <div class="title-body">
               <p>Shop By Categories</p>
           </div>
           <div class="directory-menu">
               <div class="menu-items">
                   <img src="{{URL::asset('images/hats.png')}}" alt="">
                   <div class="content">
                       <a href="">
                           <p>
                               Hats
                           </p>
                           <span>Shop Now</span>
                       </a>
                   </div>
               </div>
               <div class="menu-items">
                   <img src="{{URL::asset('images/jackets.jpeg')}}" alt="">
                   <div class="content">
                       <a href="">
                           <p>
                               Jackets
                           </p>
                           <span>Shop Now</span>
                       </a>
                   </div>
               </div>
               <div class="menu-items">
                   <img src="{{URL::asset('images/sneaker.jpeg')}}" alt="">
                   <div class="content">
                       <a href="">
                           <p>
                               Sneaker
                           </p>
                           <span>Shop Now</span>
                       </a>
                   </div>
               </div>
               <div class="menu-items">
                   <img src="{{URL::asset('images/men.png')}}" alt="">
                   <div class="content">
                       <a href="">
                           <p>
                               Mens
                           </p>
                           <span>Shop Now</span>
                       </a>
                   </div>
               </div>
               <div class="menu-items">
                   <img src="{{URL::asset('images/womens.png')}}" alt="">
                   <div class="content">
                       <a href="">
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
                           <img src="{{URL::asset('images/products.jpeg')}}" alt="">
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
                           <img src="{{URL::asset('images/products.jpeg')}}" alt="">
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
                           <img src="{{URL::asset('images/products.jpeg')}}" alt="">
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
                           <img src="{{URL::asset('images/products.jpeg')}}" alt="">
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
   </main>

<footer>
{{--    Footer--}}
    @extends('layouts.footer')
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{URL::asset('js/home.js')}}"></script>

</body>
</html>

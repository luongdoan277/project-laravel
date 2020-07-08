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
<div class="nav-links">
    <div class="link">
        <div class="logo">
            <a href="/">
                <img src="{{URL::asset('images/logo1.png')}}" alt="">
            </a>
        </div>
        <ul class="link-page">
            <li><a href="" class="links active">Home</a></li>
            <li><a href="#" class="links">About Us</a></li>
            <li><a href="#" class="links">Contact</a></li>
            <li><a href="#" class="links">Blogs</a></li>
            <li><a href="#" class="links">Product</a></li>
        </ul>
    </div>
    <div class="cart-in">
        <div class="cart">
            <a href="#">
                <i class="fas fa-shopping-bag"></i>
            </a>
        </div>
        <div class="sign-in">
            <a href="loginss.html">Sign In</a>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{URL::asset('js/home.js')}}"></script>
</body>
</html>

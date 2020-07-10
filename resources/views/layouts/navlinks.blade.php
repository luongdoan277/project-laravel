@extends('layouts.header')


@section('navlinks')
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
@endsection

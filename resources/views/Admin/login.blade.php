@extends('template.loginRegister')

@section('title')
    Login
@endsection


@section('content')
    <div class="manipulation">
    <div class="img-login-admin">
        <img src="{{asset('images/login-admin.jpeg')}}" alt="">
    </div>
    <div class="content-admin">
        <div class="title-admin">
            <span>Welcome Back!!</span>
        </div>
        <form action="login-admin" class="group-admin" method="post">
            @csrf
            <div class="admin-info">
                <input type="email" name="email" placeholder="Enter email address...">
            </div>
            <div class="error-group">
                    <span>
                        {{$errors->first('email')}}
                    </span>
            </div>
            <div class="admin-info">
                <input type="password" name="password" placeholder="Your password...">
            </div>
            <div class="error-group">
                    <span>
                        {{$errors->first('password')}}
                    </span>
            </div>
            <div class="remember-password">
                <input type="checkbox"> Remember Password
            </div>
            <div class="submit-admin">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="question">
            <a href="">Forgot Password?</a>
            <a href="{{url('register')}}">Create an account?</a>
        </div>
    </div>
    </div>
@endsection

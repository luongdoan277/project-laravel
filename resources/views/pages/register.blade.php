@extends('homepage')

@section('main')
<main>
    <div class="login">
        <div class="form-control">
{{--            Title--}}
            <h1>Sign Up</h1>
{{--            form nhap du lieu--}}
            <form action="{{route('postRegister')}}" method="post" class="form-login">
                @csrf
{{--                first name--}}
                <div class="first-name">
                    <span>First Name</span>
                    <input type="text" name="firstname">
                </div>
{{--                last name--}}
                <div class="last-name">
                    <span>Last Name</span>
                    <input type="text" name="lastname">
                </div>
{{--                email--}}
                <div class="email-register">
                    <span>Email</span>
                    <input type="text" name="email">
                </div>
{{--                password--}}
                <div class="password-register">
                    <span>Password</span>
                    <input type="password" name="password">
                </div>
{{--                submit--}}
                <div class="submit-register">
                    <input type="submit" name="submit" value="Sign Up" id="submit">
                </div>
            </form>
            <div class="question">
                <span>You have a BerryBerri Account?</span>
                <a href="{{url('login')}}">Sign In</a>
            </div>
        </div>
        <div class="image-login">
            <img src="{{asset('images/register-img.jpeg')}}" alt="">
            <div class="logo-logins">
                <a href="{{'/'}}">
                    <img src="{{asset('images/logo2.png')}}" alt="">
                </a>
            </div>
            <div class="your-style">
                <span>
                    Style for the new day
                </span>
            </div>
        </div>
    </div>
</main>
@endsection

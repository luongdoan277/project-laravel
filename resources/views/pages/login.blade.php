@extends('homepage')

@section('main')
<section>
    <div class="login">
        <div class="form-control">
            <h1>Sign In</h1>
            <form action="{{route('postLogin')}}" method="post" class="form-login">
                @csrf
                <div class="email-login">
                    <span>Email</span>
                    <input type="text" name="email">
                    @if($errors->has('email'))
                        <span>{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="password-login">
                    <span>Password</span>
                    <input type="password" name="password">
                    @if($errors->has('password'))
                        <span>{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Sign In" id="submit">
                </div>
            </form>
            <div class="question">
                <span>Do you have a BerryBerri Account?</span>
                <a href="{{url('register')}}">Sign Up</a>
            </div>
        </div>
        <div class="image-login">
            <img src="{{asset('images/login-image.jpeg')}}" alt="">
            <div class="logo-logins">
                <a href="{{url('/')}}">
                    <img src="{{asset('images/logo2.png')}}" alt="">
                </a>
            </div>
            <div class="your-style">
                <span>
                    Create Your Style
                </span>
            </div>
        </div>
    </div>
</section>
@endsection

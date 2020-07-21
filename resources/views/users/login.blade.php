<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/loginss.css')}}">
</head>
<body>
<section>
    <div class="login">
        <div class="form-control">
            <h1>Sign In</h1>
            <form action="" method="post" class="form-login">
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
</body>
</html>

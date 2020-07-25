<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
<main>
    <div class="login">
        <div class="form-control">
            <h1>Sign Up</h1>
            <form action="{{route('postRegister')}}" method="post" class="form-login">
                <span>First Name</span>
                <input type="text" name="firstname">
                <span>Last Name</span>
                <input type="text" name="lastname">
                <span>Email</span>
                <input type="text" name="email">
                <span>Password</span>
                <input type="password" name="password">
                <input type="submit" name="submit" value="Sign Up" id="submit">
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
</body>
</html>

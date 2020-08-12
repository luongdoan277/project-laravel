<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>This is @yield('title')</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/loginRegisterAdmin.css')}}">
</head>
<body>
<main>
<div class="box-background">
    @yield('content')
</div>
</main>
</body>
</html>

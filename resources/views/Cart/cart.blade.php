<!doctype html>
<html lang="en">
<head>
        <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
@yield('content')
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<script src="{{asset('js/qty.js')}}"></script>
<script src="{{asset('js/menu-hamburgerProduct.js')}}"></script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" href="{{asset('css/loginss.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/productdetails.css')}}">
    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
    <link rel="icon" href="{{asset('image/logo2.png')}}">
</head>
<body id="style-2">

@yield('main')

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="{{asset('js/home.js')}}"></script>
<script src="{{asset('js/qty.js')}}"></script>
<script>
    function addToCart(id) {
        $.ajax({
            url: '/add-to-cart/' + id,
            type: 'GET'
        }).done(function (response) {
            RenderCart(response);
            alertify.success('Success add a product');
        });
    }
    $("#change-item-cart").on("click", ".delete-items i", function (){
        $.ajax({
            url: '/deleteItem/' + $(this).data("id"),
            type: 'GET'
        }).done(function (response) {
            RenderCart(response);
            alertify.success('Delete product success');
        });
    })

    function deleteItemList(id) {
        $.ajax({
            url: '/deleteItemList/' + id,
            type: 'GET'
        }).done(function (response) {
            RenderCart(response);
            alertify.success('Delete product success');
        });
    }
    function saveItemList(id){
        $.ajax({
            url: '/saveItemList/' + id + '/' + $('#qty-item-'+id).val(),
            type: 'GET'
        }).done(function (response) {
            RenderCart(response);
            alertify.success('Update product success');
        });
    }
    function RenderCart(response){
        $("#list-item-cart").empty();
        $("#list-item-cart").html(response);
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#total-quantity-show").text($("#total_quantity").val());
    }
</script>
<script src="{{asset('js/menu-hamburger.js')}}"></script>

</body>
</html>


@section('cart')
<head>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('FontAwesome/css/all.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script>
        function plus() {
            var t = document.getElementById('textbox').value;
            document.getElementById('textbox').value = parseInt(t) + 1;
        }
        function minus() {
            var t = document.getElementById('textbox').value;
            if(parseInt(t) > 1){
                document.getElementById('textbox').value = parseInt(t) - 1;
            }
        }
    </script>

    <style>
       .shopping-cart{
           width: 20%;
           margin: 100px auto;
           padding: 20px;
           float: left;;
       }
        .shopping-cart > div{
            display: flex;
            border: 1px solid #e1d9d9;
            width: 100%;
            text-align: center;
            height: 30px;
            border-radius: 5px;
        }
        .increase{
            width: 40px;
            text-align: center;
            background-color: #f2f2f2;
            display: inline-block;
            cursor: pointer;

        }
        .value{
            width: 40px;
            text-align: center;
            display: inline-block;
            cursor: pointer;
        }
       .reduction{
           width: 40px;
           text-align: center;
           background-color: #f2f2f2;
           display: inline-block;
           cursor: pointer;
       }
    </style>

</head>
<body>
<div class="container">
        <div class="check-out text-center">
            Checkout
        </div>
        <div class="col-md-9 border-left">
            <div class="text">
                <div class="product"><b>Products</b></div>
                <div class="description"><b>Description</b></div>
                <div class="quantity"><b>Quantity</b></div>
                <div class="price"><b>Price</b></div>
                <div class="remove"><b>Remove</b></div>
            </div>

            <div class="cart">
                <div class="img">
                    <img src="{{asset('images/products.jpeg')}}" alt="" height="255px" width="220px">
                </div>
                <div class="title"><b>Besyana Tunic Blue</b></div>
                {{--            <div class="shopping-cart">--}}
                {{--                <div>--}}
                {{--                    <span class="increase">-</span>--}}
                {{--                    <span class="value">1</span>--}}
                {{--                    <span class="reduction">+</span>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="count">
                    <input type="button" onclick="plus()" value="+" class="input-button">
                    <input type="text" value="1" id="textbox" style="width: 40px; padding: 3px 6px">
                    <input type="button" onclick="minus()" value="-" class="input-button">
                </div>
                <div class="price1"><b>Rp 195.000</b></div>
                <div class="icon-remove"><a href=""><i class="fas fa-trash" style="color: black"></i></a></div>
            </div>

            <div class="cart">
                <div class="img"><img src="{{asset('images/products.jpeg')}}" alt="" height="255px" width="220px"></div>
                <div class="title"><b>Besyana Tunic Blue</b></div>
                <div class="count">
                    <input type="button" onclick="plus()" value="+" class="input-button">
                    <input type="text" value="1" id="textbox" style="width: 40px; padding: 3px 6px">
                    <input type="button" onclick="minus()" value="-" class="input-button">
                </div>
                {{--            <div class="shopping-cart">--}}
                {{--                <div>--}}
                {{--                    <span class="increase">-</span>--}}
                {{--                    <span class="value">1</span>--}}
                {{--                    <span class="reduction">+</span>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="price1"><b>Rp 195.000</b></div>
                <div class="icon-remove"><a href=""><i class="fas fa-trash" style="color: black"></i></a></div>
            </div>

        </div>
        <div class="col-md-3 border-right">
            <div>
                <div class="subtotal">
                    <p style="float: left">Subtotal</p>
                    <p style="float: right">Rp 195.000</p>
                </div>
                <div class="subtotal">
                    <p style="float: left">Tax</p>
                    <p style="float: right">Rp 195.000</p><br/>
                    <hr/>
                </div>
            </div>
            <div class="subtotal">
                <p style="float: left">TOTAL PAYMENT</p>
                <p style="float: right;color: orange">Rp 195.000</p>
            </div>
            <div class="payment">
                <a><h6 class="text-center" style="color: white">Pay Now</h6></a>
            </div>
        </div>
    </div>
</div>
</body>
<footer>
   @yield('layouts.footer')
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function () {
            let $elm_value = $(".value");
            $('.increase').click(function(){
                let $value_increase = parseInt($elm_value.text());
                if($value_increase <= 1){
                    return false;
                }
                $elm_value.text($value_increase - 1);
            })
            $('.reduction').click(function(){
                let $value_increase = parseInt($elm_value.text());
                $elm_value.text($value_increase + 1);
            })
        })
    </script>


@if(Session::has("Cart") != null)
    <div>
        <div class="subtotal">
            <p style="float: left; font-weight: 700">Subtotal</p>
            <p style="float: right">${{number_format(Session::get("Cart")->totalPrice)}}</p>
        </div>
        <div class="subtotal">
            <p style="float: left; font-weight: 700">Tax</p>
            <p style="float: right">0</p><br/>
            <hr/>
        </div>
    </div>
    <div class="subtotal">
        <p style="float: left; font-weight: 700; color: orange;">TOTAL PAYMENT</p>
        <p style="float: right;color: orange">${{number_format(Session::get("Cart")->totalPrice)}}</p>
    </div>
@elseif(Session::has("Cart") == null)
    <div>
        <div class="subtotal">
            <p style="float: left; font-weight: 700">Subtotal</p>
            <p style="float: right">0</p>
        </div>
        <div class="subtotal">
            <p style="float: left; font-weight: 700">Tax</p>
            <p style="float: right">0</p><br/>
            <hr/>
        </div>
    </div>
    <div class="subtotal">
        <p style="float: left; font-weight: 700; color: orange;">TOTAL PAYMENT</p>
        <p style="float: right;color: orange">0</p>
    </div>
@endif
@if(Auth::user())
    <button type="button" class="payment" data-toggle="modal" data-target="#myModal">
        <h6 class="text-center" style="color: white">Pay Now</h6>
    </button>
@elseif(!Auth::user())
    <a href="{{route('getlogin')}}" class="btn payment">
        <h6 class="text-center" style="color: white">Pay Now</h6>
    </a>
@endif

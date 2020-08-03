@if(Session::has("Cart") != null)
    <div class="content-checkout" id="style-1">
        @foreach(Session::get("Cart")->products as $item)
        <div class="items">
            <div class="image-items">
                <img src="images/{{$item['productInfo']->url_image}}" alt="">
            </div>
            <div class="description">
                <a href="{{ route('product.show', $item['productInfo']->id)}}">{{$item['productInfo']->name}}</a>
                <p>${{number_format($item['productInfo']->price)}}</p>
                <p>Amount: {{$item['qty']}}</p>
                <form class="delete-items">
                    <i class="fas fa-trash-alt btn" data-id="{{$item['productInfo']->id}}"></i>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="total">
        <p>Subtotal :</p>
        <span>${{number_format(Session::get("Cart")->totalPrice)}}</span>
        <input hidden id="total_quantity" type="number" value="{{Session::get("Cart")->totalQty}}">
    </div>
@elseif(Session::has("Cart") == null)
    <p style="height: 431px; text-align: center; padding-top: 50%"><b style="color: #949494">Your cart is empty</b></p>
@endif

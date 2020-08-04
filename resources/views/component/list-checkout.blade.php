<div class="cart" id="list-item-cart">
    @if(Session::has("Cart") != null)
        @foreach(Session::get("Cart")->products as $item)
            <div class="item">
                <div class="img">
                    <img src="images/{{$item['productInfo']->url_image}}" alt="" height="255px" width="220px">
                </div>
                <div class="title"><b>Besyana Tunic Blue</b></div>
                <div class="count">
                    <input type="button" onclick="minus()" value="-" class="input-button">
                    <input type="text" value="1" class="textbox" style="width: 40px; padding: 3px 6px">
                    <input type="button" onclick="plus()" value="+" class="input-button">
                </div>
                <div class="price1"><p>${{number_format($item['productInfo']->price)}}</p></div>
                <form class="icon-remove">
                    <i class="fas fa-trash btn" onclick="deleteItemList({{$item['productInfo']->id}});"></i>
                </form>
            </div>
        @endforeach
    @endif
</div>

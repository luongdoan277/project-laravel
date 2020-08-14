<table class="table-product">
    <tr class="bt">
        <th class="ct">Image</th>
        <th class="ct">Product</th>
        <th class="ct">Quantity</th>
        <th class="ct">Status</th>
        <th class="ct">Amount</th>
        <th class="ct">Delete</th>
        <th class="ct">update</th>
    </tr>
    @foreach($Products as $product)
        @csrf
        <tr class="bt">
            <td class="ct">
                <div  class="image-product">
                    <img src="images/{{$product->url_image}}" alt="image">
                </div>
            </td>
            <td class="ct">{{$product->name}}</td>
            <td class="ct">{{$product->quantity}}</td>
            <td class="ct">
                <div class="status-product">
                    <span>New</span>
                </div>
            </td>
            <td class="ct">${{$product->price}}</td>
            <td class="ct">
                <a href="/delete/{{$product->id}}">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </td>
            <td class="ct">
                <a href="{{route('product.show', $product->id)}}">
                    <i class="far fa-edit"></i>
                </a>
            </td>
        </tr>
    @endforeach
</table>

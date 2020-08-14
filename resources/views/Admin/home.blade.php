@extends('template.templateAdmin')


@section('content')
    <div class="shopping-cart">
        <div class="search-product">
            <form action="" class="form-group-admin">
                <div class="form-control-admin">
                    <input type="text" placeholder="Name or id...">
                </div>
                <div class="submit-product">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="highchart">
            <figure class="highcharts-figure">
                <div id="chart"></div>
            </figure>
        </div>
        <div class="content-shoppingcart">
            <div class="listproduct-shoppingcart">
                <div class="cart-header">
                    Shopping Cart
                </div>
                <div class="cart-content">
                    @if(count($Products)>0)
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
                    @else
                        <div class="empty-product" style="padding: 8px 10px">
                            <p>List is empty</p>
                        </div>
                    @endif
                </div>
                <div class="nav" style="border-top: 1px solid #0000002e;padding: 10px">
                    {!! $Products->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

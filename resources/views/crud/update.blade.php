@extends('template.templateAdmin')

@section('content')
    <div class="product-shoppingcart">
        <div class="cart-header">
            Current information
        </div>
        <div class="cart-content">
                <table class="table-product">
                    <tr class="bt">
                        <th class="ct">ID</th>
                        <th class="ct">Image</th>
                        <th class="ct">Product</th>
                        <th class="ct">Quantity</th>
                        <th class="ct">Status</th>
                        <th class="ct">Code</th>
                        <th class="ct">Amount</th>
                    </tr>
                        <tr class="bt">
                            <td class="ct">{{$product->id}}</td>
                            <td class="ct">
                                <div  class="image-product">
                                    <img src="{{asset('images/'. $product->url_image)}}" alt="image">
                                </div>
                            </td>
                            <td class="ct">{{$product->name}}</td>
                            <td class="ct">{{$product->quantity}}</td>
                            <td class="ct">
                                <select name="">
                                    <option value="">Active</option>
                                    <option value="">No</option>
                                </select>
                            </td>
                            <td class="ct">{{$product->sku}}</td>
                            <td class="ct">${{$product->price}}</td>
                        </tr>
                </table>
        </div>
    </div>
    <div class="your-update">
        <p>Your Update</p>
    </div>
    <form action="/update/{{$product->id}}" class="form-control-update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="product-info">
            <label>Name</label>
            <input type="text" name="name" value="{{$product->name}}">
            <div><span style="color: red">
                        {{$errors->first('name')}}
                </span>
            </div>
        </div>
        <div class="product-info">
            <label>Type</label>
            <input type="text" name="type" value="{{$product->type}}">
            <div><span style="color: red">
                    {{$errors->first('type')}}
                </span>
            </div>
        </div>
        <div class="product-info">
            <label>Slug</label>
            <input type="text" name="slug" value="{{$product->slug}}">
            <div><span style="color: red">
                       {{$errors->first('slug')}}
                </span>
            </div>
        </div>
        <div class="product-info">
            <label>Description</label>
            <input type="text" name="description" value="{{$product->description}}">
            <div>{{$errors->first('description')}}</div>
            <div><span style="color: red">
                       {{$errors->first('description')}}
                    </span>
            </div>
        </div>
        <div class="product-info">
            <label>Sku</label>
            <input type="text" name="sku" value="{{$product->sku}}">
            <div><span style="color: red">
                       {{$errors->first('sku')}}
                    </span>
            </div>
        </div>
        <div class="product-info">
            <label>Price</label>
            <input type="text" name="price" value="{{$product->price}}">
            <div><span style="color: red">
                       {{$errors->first('price')}}
                    </span>
            </div>
        </div>
        <div class="product-info">
            <label>Quantity</label>
            <input type="number" name="quantity" value="{{$product->quantity}}">
            <div><span style="color: red">
                       {{$errors->first('quantity')}}
                    </span>
            </div>
        </div>
        <div class="product-info">
            <label>Category ID</label>
            <input type="text" name="category_id" value="{{$product->category_id}}">
            <div><span style="color: red">
                       {{$errors->first('category_id')}}
                    </span>
            </div>
        </div>
        <div class="product-info">
            <label>Status</label>
            <input type="text" name="status" value="{{$product->status}}">
            <div><span style="color: red">
                       {{$errors->first('status')}}
                    </span>
            </div>
        </div>
        <div class="product-info">
            <label>URL Image</label>
            <input type="file" name="url_image" style="cursor: pointer">
            <div>
                <span style="color: red">
                   {{$errors->first('url_image')}}
                </span>
            </div>
        </div>
        <div class="submit-insert">
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection

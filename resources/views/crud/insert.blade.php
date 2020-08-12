@extends('template.templateAdmin')

@section('content')
    <div class="form-update">
{{--        @if($message == Session::get('success'))--}}
        <div class="message-success">
            <div class="box-success">
                <span>Add Success</span>
                <i class="fas fa-vote-yea"></i>
            </div>
        </div>
{{--        @endif--}}
        <form action="{{route('product.store')}}" class="form-control-update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="product-info">
                <label>Name</label>
                <input type="text" name="name">
                <div><span style="color: red">
                        {{$errors->first('name')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Type</label>
                <input type="text" name="type">
                <div><span style="color: red">
                       {{$errors->first('type')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Slug</label>
                <input type="text" name="slug">
                <div><span style="color: red">
                       {{$errors->first('slug')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Description</label>
                <input type="text" name="description">
                <div>{{$errors->first('description')}}</div>
                <div><span style="color: red">
                       {{$errors->first('slug')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Sku</label>
                <input type="text" name="sku">
                <div><span style="color: red">
                       {{$errors->first('sku')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Price</label>
                <input type="text" name="price">
                <div><span style="color: red">
                       {{$errors->first('price')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Quantity</label>
                <input type="number" name="quantity">
                <div><span style="color: red">
                       {{$errors->first('quantity')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Category ID</label>
                <input type="text" name="category_id">
                <div><span style="color: red">
                       {{$errors->first('category_id')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>Status</label>
                <input type="text" name="status">
                <div><span style="color: red">
                       {{$errors->first('status')}}
                    </span>
                </div>
            </div>
            <div class="product-info">
                <label>URL Image</label>
                <input type="file" name="url_image" style="cursor: pointer">
                <div><span style="color: red">
                       {{$errors->first('url_image')}}
                    </span>
                </div>
            </div>
            <div class="submit-insert">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection

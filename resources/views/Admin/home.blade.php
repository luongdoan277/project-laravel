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
                <div class="cart-content" id="table_data">
                    @include('Admin.pagination')
                </div>
            </div>
        </div>
    </div>
@endsection

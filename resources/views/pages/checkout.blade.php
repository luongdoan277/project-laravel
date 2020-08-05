@extends('homepage')

@section('main')
    @include('component.headerDetails')
    <div class="check-out-list">
        <div class="check-out text-center">
            Checkout
        </div>
        <div class="col-md-9 list-product-checkout">
            <div class="text">
                <div class="product-checkout"><b>Products</b></div>
                <div class="description-checkout"><b>Name</b></div>
                <div class="quantity-checkout"><b>Quantity</b></div>
                <div class="price-checkout"><b>Price</b></div>
                <div class="save-checkout"><b>Save</b></div>
                <div class="remove-checkout"><b>Remove</b></div>
            </div>
            <div class="cart" id="list-item-cart">
                @include('component.list-checkout')
            </div>
        </div>
        <div class="col-md-3 border-right" >
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
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModal">Select a shipping address</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="form-group">
                                <form action=""  method="post">
                                    <label for="task" class="col-sm-3 control-label bold">Name:</label>
                                    <div class="margin-left-right">
                                        <input type="text" name="name" id="task-name" class="form-control1" placeholder="Name">
                                    </div>
                                    <label for="task" class="col-sm-3 control-label bold">Phone Number:</label>
                                    <div class="margin-left-right">
                                        <input type="text" name="phone_number" id="task-price" class="form-control1" placeholder="Phone number">
                                    </div>
                                    <label for="task" class="col-sm-3 control-label bold">State/Province/Region:</label>
                                    <div class="margin-left-right">
                                        <input type="text" name="province" class="form-control1" placeholder="State/Province/Region">
                                    </div>
                                    <label for="task" class="col-sm-3 control-label bold">City:</label>
                                    <div class="margin-left-right">
                                        <input type="text" name="City" class="form-control1" placeholder="City">
                                    </div>
                                    <label for="task" class="col-sm-3 control-label bold">Address:</label>
                                    <div class="margin-left-right">
                                        <input type="text" name="address" id="task-name" class="form-control1" placeholder="Detail">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Create an order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer')
@endsection


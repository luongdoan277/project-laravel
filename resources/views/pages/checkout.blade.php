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
                <div class="remove-checkout"><b>Remove</b></div>
            </div>
            @include('component.list-checkout')
        </div>
        <div class="col-md-3 border-right">
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
            <button type="button" class="payment" data-toggle="modal" data-target="#myModal">
                <h6 class="text-center" style="color: white">Pay Now</h6>
            </button>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModal">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" id="task-name" class="form-control" placeholder="Name...">
                                </div><br/>
                                <label for="task" class="col-sm-3 control-label">Telephone Number</label>
                                <div class="col-sm-8">
                                    <input type="text" name="price" id="task-price" class="form-control" placeholder="Telephone number ...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Chọn tỉnh thành ...</option>
                                            <option value="1">Thai Binh</option>
                                            <option value="2">Ha Noi</option>
                                            <option value="3">Thanh Hoa</option>
                                            <option value="4">Hai Phong</option>
                                            <option value="5">Nghe An</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Quận / Huyện...</option>
                                            <option value="1">Thai Binh</option>
                                            <option value="2">Ha Noi</option>
                                            <option value="3">Thanh Hoa</option>
                                            <option value="4">Hai Phong</option>
                                            <option value="5">Nghe An</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Phường / Xã ...</option>
                                            <option value="1">Thai Binh</option>
                                            <option value="2">Ha Noi</option>
                                            <option value="3">Thanh Hoa</option>
                                            <option value="4">Hai Phong</option>
                                            <option value="5">Nghe An</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 20px">
                                <div class="col-sm-8">
                                    <input type="text" name="name" id="task-name" class="form-control" placeholder="Nhập địa chỉ chi tiết ...">
                                </div><br/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('component.footer')
@endsection


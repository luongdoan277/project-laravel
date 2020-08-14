@extends('homepage')
@section('main')
    @include('component.headerProduct')
    <div>
        <div class="details-order">
            @foreach($order as $orderdetails)
            <div class="text-center margin-top" style="margin: 50px 0">
                <span style="font-size: 26px; font-weight: 600">Order Detail ({{$orderdetails['order_number']}})</span>
            </div>
            <div class="content-orderdetails" style="margin: 0 100px">
                <div class="customer-info-order">
                    <ul style="margin-left: 20px">
                        <li>
                            <div class="title-info-customer">
                                <p style="padding-top: 10px">Information Customer</p>
                            </div>
                        </li>
                        <li class="padding-left">
                            <span>Customer name:</span>
                            <p>{{$customer->name}}</p>
                        </li>
                        <li class="padding-left">
                            <span>Number phone:</span>
                            <p>{{$customer->phone}}</p>
                        </li>
                        <li class="padding-left">
                            <span>Email:</span>
                            <p>{{$customer->email}}</p>
                        </li>
                        <li class="padding-left">
                            <span>Payments:</span>
                            <p>{{$orderdetails->payment_method}}</p>
                        </li>
                        <li class="padding-left">
                            <span>Transport fee:</span>
                            <p>Free</p>
                        </li>
                    </ul>
                </div>
                <div class="payment-orderdetail">
                    <ul style="margin-left: 20px">
                        <li>
                            <div class="title-info-shipment">
                                <p style="padding-top: 10px">Shipment Details</p>
                            </div>
                        </li>

                        <li class="padding-left">
                            <span>Order date:</span>
                            <p>{{$orderdetails->created_at}}</p>
                        </li>
                        <li class="padding-left">
                            <span>Delivery date:</span>
                            <p>{{$orderdetails->created_at}}</p>
                        </li>
                        <li class="padding-left">
                            <span>Date of receipt of goods:</span>
                            <p>28-7-2020</p>
                        </li>
                        <li class="padding-left">
                            <span>Come:</span>
                            <p>{{$orderdetails->shipping_address}}</p>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="product-info-order" style="margin: 0 100px">
                <table>
                    <tr class="bb-blue">
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Quality</th>
                        <th>Unit price</th>
                        <th>Into money</th>
                        <th>Total Price</th>
                    </tr>
                    @foreach($order_item as $product)
                        <tr class="bt">
                            <td>{{$product->id}}</td>
                            <td>
                                <div class="image-product-order">
                                    <img src="images/{{$product->url_image}}" alt="">
                                </div>
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->price}}</td>
                            <td></td>
                        </tr>
                    @endforeach

                    <tr class="bt" style="width: 100%; border-top: 3px solid #5a5a5a">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><p>Total:</p></td>
                        <td>
                            <p>${{$orderdetails->total}}</p>
                        </td>
                    </tr>
                </table>
                <div style="margin-bottom: 50px"></div>
            </div>
            @endforeach
        </div>
    @include('component.footer')
@endsection

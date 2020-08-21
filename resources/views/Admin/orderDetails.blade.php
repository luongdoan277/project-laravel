@extends('template.templateAdmin')

@section('content')
    <div class="details-order">
        @foreach($order as $orderdetails)
        <div class="header-title">
            <span>Payment and delivery information</span>
        </div>
        <div class="content-orderdetails">
            <div class="customer-info-order">
                <ul>
                    <li>
                        <div class="title-info-customer">
                            <p>Information Customer</p>
                        </div>
                    </li>
                    <li>
                        <span>Customer name:</span>
                        <p>{{$customer->name}}</p>
                    </li>
                    <li>
                        <span>Number phone:</span>
                        <p>{{$customer->phone}}</p>
                    </li>
                    <li>
                        <span>Email:</span>
                        <p>{{$customer->email}}</p>
                    </li>
                    <li>
                        <span>Payments:</span>
                        <p>{{$orderdetails->payment_method}}</p>
                    </li>
                    <li>
                        <span>Transport fee:</span>
                        <p>$10</p>
                    </li>
                </ul>
            </div>
            <div class="payment">
                <ul>
                    <li>
                        <div class="title-info-shipment">
                            <p>Shipment Details</p>
                        </div>
                    </li>

                    <li>
                        <span>Order date:</span>
                        <p>{{$orderdetails->created_at}}</p>
                    </li>
                    <li>
                        <span>Delivery date:</span>
                        <p>{{$orderdetails->created_at}}</p>
                    </li>
                    <li>
                        <span>Date of receipt of goods:</span>
                        <p>28-7-2020</p>
                    </li>
                    <li>
                        <span>Come:</span>
                        <p>{{$orderdetails->shipping_address}}</p>
                    </li>
                </ul>
            </div>
            <div style="width: 20%; background-color: white; height: 250px">
                <form action="">
                    <p style="font-size: 20px; font-weight: 600; padding: 10px 12px">Status</p>
                    <select name="status" class="form-control input-inline" style="width: 200px">
                        <option value="1">Chưa giao</option>
                        <option value="2">Đang giao</option>
                        <option value="2">Đã giao</option>
                    </select>
                    <input type="submit" value="Xử lý" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="product-info-order">
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
                            <img src="{{asset('images/'. $product->url_image)}}" alt="">
                        </div>
                    </td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->price}}</td>
                    <td></td>
                </tr>
                @endforeach

                <tr class="bt" style="width: 100%">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <p>${{$orderdetails->total}}</p>
                    </td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>
@endsection

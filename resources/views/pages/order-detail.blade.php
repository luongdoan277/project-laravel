@extends('homepage')
@section('main')
    @include('component.headerProduct')
    <div>
        @foreach($order as $orders => $value)
        <div class="details-order">
            <div class="text-center margin-top" style="margin-bottom: 50px">
                <span style="font-size: 26px; font-weight: 600">Order Detail ({{$value['id']}})</span>
            </div>
            <div class="content-orderdetails" style="margin: 0 100px">
                <div class="customer-info-order" style="width: 40%; height: 250px; background: #ffffff; align-items: center; margin-bottom: 5%;">
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
                            <p>Cash</p>
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
                            <p>{{$value['created_at']}}</p>
                        </li>
                        <li>
                            <span>Delivery date:</span>
                            <p>25-7-2020</p>
                        </li>
                        <li>
                            <span>Date of receipt of goods:</span>
                            <p>28-7-2020</p>
                        </li>
                        <li>
                            <span>Gamete:</span>
                            <p>Phú Diễn,Bắc Từ Liêm,Hà Nội</p>
                        </li>
                        <li>
                            <span>Come:</span>
                            <p>Lê Lợi,Kiến Xương,Thái Bình</p>
                        </li>
                    </ul>
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
                    @foreach($order_item as $value)
                        <tr class="bt">
                            <td>{{$value['id']}}</td>
                            <td>
                                <div class="image-product-order">
                                    <img src="{{asset('images/'.$value['url_image'])}}" alt="">
                                </div>
                            </td>
                            <td>{{$value['name']}}</td>
                            <td>2</td>
                            <td>$350</td>
                            <td>$350</td>
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
                            <p>$.1000</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        @endforeach
    </div>
    @include('component.footer')
@endsection

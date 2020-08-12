@extends('template.templateAdmin')

@section('content')
    <div class="details-order">
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
                        <p>Vuong Ngoc Khanh</p>
                    </li>
                    <li>
                        <span>Number phone:</span>
                        <p>03623102905</p>
                    </li>
                    <li>
                        <span>Email:</span>
                        <p>khanhvuong987@gmail.com</p>
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
                        <p>23-7-2020</p>
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
                <tr class="bt">
                    <td>1</td>
                    <td>
                        <div class="image-product-order">
                            <img src="{{asset('images/aerobill-legacy91-training-hat-1TrTBz.jpg')}}" alt="">
                        </div>
                    </td>
                    <td>Hats</td>
                    <td>2</td>
                    <td>$350</td>
                    <td>$350</td>
                    <td></td>
                </tr>
                <tr class="bt">
                    <td>1</td>
                    <td>
                        <div class="image-product-order">
                            <img src="{{asset('images/aerobill-legacy91-training-hat-1TrTBz.jpg')}}" alt="">
                        </div>
                    </td>
                    <td>Hats</td>
                    <td>2</td>
                    <td>$350</td>
                    <td>$350</td>
                    <td></td>
                </tr>
                <tr class="bt">
                    <td>1</td>
                    <td>
                        <div class="image-product-order">
                            <img src="{{asset('images/aerobill-legacy91-training-hat-1TrTBz.jpg')}}" alt="">
                        </div>
                    </td>
                    <td>Hats</td>
                    <td>2</td>
                    <td>$350</td>
                    <td>$350</td>
                    <td></td>
                </tr>
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
@endsection

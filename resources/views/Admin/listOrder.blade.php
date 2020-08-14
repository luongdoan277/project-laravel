@extends('template.templateAdmin')

@section('content')
    <div class="order-page-content">
        <div class="search-order">
            <form action="" class="form-order">
                <input type="text" name="value" placeholder="Name or code orders..." value="name">
                <button type="submit"><i class="fas fa-search"></i> Search</button>
            </form>
            <div class="month-option">
                <label>Month</label>
                <select class="select-month">
                    <option value="" disabled selected>Choose your option</option>
                    <option value="">
                        example 1
                    </option>
                    <option value="">
                        example 2
                    </option>
                    <option value="">
                        example 1
                    </option>
                </select>
            </div>
        </div>
        <div class="order-shoppingcart">
            <div class="header-order">
                <span>Order Shopping</span>
            </div>
            <div class="order-content">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Time</th>
                        <th>Total Price</th>
                        <th>Detail</th>
                        <th>update Status</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($OrderList as $orderlist)
                        <tr class="bb">
                            <td>{{$orderlist->id}}</td>
                                <td>{{$orderlist->name}}</td>
                            <td>
                                <div class="status">
                                    <span>{{$orderlist->status}}</span>
                                </div>
                            </td>
                            <td>{{$orderlist->created_at}}</td>
                            <td>${{$orderlist->total}}</td>
                            <td>
                                <a href={{route('order-details', $orderlist->order_number)}}>
                                    <i class="far fa-eye"></i>
                                </a>
                            </td>
                            <td>
                                <div class="update-status">
                                    <form action="{{route('update-status', $orderlist->id)}}" class="control-status">
                                        <input type="number" name="status" placeholder="Enter number..." min="1" max="3">
                                        <input hidden type="submit">
                                        <div>{{$errors->first('status')}}</div>
                                    </form>

                                </div>
                            </td>
                            <td>
                                <a href="">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

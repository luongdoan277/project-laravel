<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use App\Model\Order;
use App\Model\OrderItem;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderAdminController extends Controller
{
    public function index(){
        $OrderList = DB::select('select * from orders,customers where orders.customer_id = customers.id');
//        dd($OrderList);
        return view('Admin.listOrder',compact('OrderList'));
    }

    public function orderDetails($order_number){
        $order = Order::all()->where('order_number','=', $order_number);
        foreach ($order as $key){
            $customer_id = $key['customer_id'];
            $order_id = $key['id'];
        }
        $customer = Customer::find($customer_id);

        $order_item = DB::select('select * from orders,products,order_items where orders.id = ' . $order_id . ' ' . 'and products.id = order_items.product_id' . ' ' . 'and  order_items.order_id = ' . $order_id );
//          dd($order_item);
//          dd($customer->name);
//          dd($order,$customer,$order_item);
            return view('Admin.orderDetails',compact(['order','customer','order_item']));
    }

//    public function orderStatus($order_number){
//        $orders = Order::find($order_number);
//        return view('Admin.updateStatus',compact('orders'));
//    }

    public function updateStatus(Request $request,$order_id){
        $this->validate($request,[
           'status'=>'max:1',
        ]);

//        dd($order_number);
        $orders = Order::find($order_id);

        $orders->status = $request->input('status');

        $orders->save();
        return redirect()->back();

    }
}


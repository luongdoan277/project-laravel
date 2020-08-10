<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\Order;
use App\Model\OrderItem;
use Illuminate\Http\Request;
use Session;

class OrderController extends Controller
{
    public function createOrder(Request $request){
        $cart = Session::get('Cart');
//        dd($cart);
        $customer = Customer::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => 123456,
            'phone' => $request->get('phone'),
        ]);
        $order = Order::create([
            'order_number' => random_bytes(12),
            'customer_id' => $customer->id,
            'shipping_address' => $request->get('address'),
            'shipping_method' => 1,
            'payment_method' => $request->get('Payment_method'),
            'total' => $cart->totalPrice,
            'note'=>$request->get('note'),
        ]);
        foreach ($cart->products as $key => $value){
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $key,
                'quantity' => $value['qty'],
                'price' => $value['price']/$value['qty'],
                'product_type' => $request->get('note')
            ]);
        }
        Session::forget('Cart');
        return redirect()->route('home');
    }
    public function SearchOrder($order_number){

    }
}

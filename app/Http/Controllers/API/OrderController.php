<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\Order;
use App\Model\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
            'order_number' => random_int(00000001,99999999),
            'customer_id' => $customer->id,
            'shipping_address' => $request->get('address'),
            'shipping_method' => 1,
            'payment_method' => $request->get('Payment_method'),
            'total' => $cart->totalPrice,
            'note'=>$request->get('note'),
        ]);
        foreach ($cart->products as $key => $value){
            $quantity = $value['qty'];
            $price = $value['price']/$value['qty'];
            $product_type = $value['productInfo']->name;
            $item_type = $value['productInfo']->url_image;
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $key,
                'quantity' => $quantity,
                'price' => $price,
                'product_type' => $product_type,
                'item_type' => $item_type,
            ]);
        }
        Mail::send('pages.mailorderdetail',[
            'name' => $request->get('name'),
            'items' => $cart->products,
            'address' => $request->get('address'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'order' => $order,
        ], function ($mail) use ($request, $order){
            $mail->from('luongdoan277@gmail.com');
            $mail->to($request->get('email'));
            $mail->subject('Order '.$order['order_number']);
        });
        Session::forget('Cart');
        return redirect()->route('home');
    }
    public function getSearchOrder(){
        return view('pages.searchOrder');
    }
    public function SearchOrder(Request $request){
        $order_number=$request->get('order_number');
        $order = Order::all()->where('order_number','=', $order_number);
        foreach ($order as $key){
            $customer_id = $key['customer_id'];
            $order_id = $key['id'];
        }
        $customer = Customer::find($customer_id);
        $order_item = DB::select('select * from orders,products,order_items where orders.id = ' . $order_id . ' ' . 'and products.id = order_items.product_id' . ' ' . 'and  order_items.order_id = ' . $order_id );
//        dd($customer->name);
//        dd($order,$customer,$order_item);
        return view('pages.order-detail',compact(['order','customer','order_item']));
    }
}

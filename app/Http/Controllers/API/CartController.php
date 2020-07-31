<?php


namespace App\Http\Controllers\API;
use App\Model\Product;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cookie;

class CartController extends BaseController
{
    public function showCart(){
        return view('checkout');
    }
    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = Cookie::get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->url_image
                ]
            ];

            Cookie::put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            Cookie::put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->url_image
        ];

        Cookie::put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}

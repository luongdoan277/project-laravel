<?php


namespace App\Http\Controllers;
use App\Model\Product;
use Illuminate\Routing\Controller as BaseController;

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

        $cart = cookie()->get('cart');

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

            cookie()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            cookie()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->url_image
        ];

        cookie()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}

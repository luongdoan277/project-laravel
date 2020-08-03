<?php


namespace App\Http\Controllers\API;
use App\Model\CartItem;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Session;

class CartController extends BaseController
{
    public function getCheckout(){
        return view('pages.checkout');
    }

    public function addToCart(Request $request,$id)
    {
        $product = Product::find($id);
        if ($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new CartItem($oldCart);
            $newCart->addToCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('component.cart', compact('newCart'));
    }
    public function deleteItem(Request $request,$id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new CartItem($oldCart);
        $newCart->DeleteItem($id);
        if (Count($newCart->products)>0){
            $request->session()->put('Cart', $newCart);
        }
        else
        {
            $request->session()->forget('Cart');
        }
        return view('component.cart', compact('newCart'));
    }
}

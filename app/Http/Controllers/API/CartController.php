<?php


namespace App\Http\Controllers\API;
use App\Model\Address;
use App\Model\CartItem;
use App\Model\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
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
        return view('component.cart');
    }
    public function deleteListItem(Request $request,$id)
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
        return view('component.list-checkout');
    }
    public function saveListItem(Request $request,$id,$qty)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new CartItem($oldCart);
        $newCart->SaveItem($id, $qty);

        $request->session()->put('Cart', $newCart);

        return view('component.list-checkout');
    }
    public function address(Request $request){
        $validate = Validator::
        make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'phone' => 'required|numeric',
                'province' => 'required|string|max:255',
                'cty' => 'required|string|max:255',
                'address' => 'required|string|max:255',
            ],
            [
                'required' => 'Please enter :attribute',
            ]
        );
//        if ($validate->fails()){
//
//        }else{
            $request->session()->put('Address', $request->all());
            return view('pages.review-order');
//        }
//        $address = $request->all();
//        dd($address);
    }
}

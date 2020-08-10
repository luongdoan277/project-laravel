<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
//    protected $table = 'cart_items';
//    protected $primaryKey = 'item_id';
//    protected $fillable = [
//        'cart_id',
//        'product_id',
//        'sku',
//        'quantity',
//        'price',
//        'product_type',
//    ];
//
//    public function product() {
//        return $this->belongsTo(Product::class, 'product_id');
//    }
    public $products = null;
    public $totalPrice = 0;
    public $totalQty = 0;
    public function __construct($cart){
        if ($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
        }
    }
    public function addToCart($products, $id){
        $newProduct = ['qty'=>0, 'price'=> $products->price, 'productInfo' => $products];
        if ($this->products){
            if (array_key_exists($id, $this->products)){
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['qty']++;
        $newProduct['price'] = $newProduct['qty'] * $products->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $products->price;
        $this->totalQty++;
    }

    public function DeleteItem($id){
        $this->totalQty -= $this->products[$id]["qty"];
        $this->totalPrice -= $this->products[$id]["price"];
        unset($this->products[$id]);
    }
    public function SaveItem($id, $qty){
        $this->totalQty -= $this->products[$id]["qty"];
        $this->totalPrice -= $this->products[$id]["price"];

        $this->products[$id]["qty"] = $qty;
        $this->products[$id]["price"] = $qty * $this->products[$id]["productInfo"]->price;

        $this->totalQty += $this->products[$id]["qty"];
        $this->totalPrice += $this->products[$id]["price"];
    }
}

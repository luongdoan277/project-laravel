<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'order_number',
        'customer_id',
        'shipping_address',
        'shipping_method',
        'tracking_number',
        'payment_method',
        'status_payment',
        'total',
        'sub_total',
        'shipping_fee',
        'status',
        'note'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'shipping_address');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}

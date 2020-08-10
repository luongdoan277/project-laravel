<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'email',
        'password',
        'type',
        'name',
        'last_purchase_at',
        'is_active'
    ];

    public function cart() {
        return $this->hasOne(Cart::class, 'customer_id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class,'customer_id');
    }

}

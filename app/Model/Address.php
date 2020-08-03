<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = 'address_id';
    protected $table = 'addresses';

    protected $fillable = [
        'id',
        'type',
        'first_name',
        'last_name',
        'phone',
        'city',
        'district',
        'ward',
        'is_default'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'id', 'id');
    }
}

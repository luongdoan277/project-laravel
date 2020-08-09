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
        'name',
        'phone',
        'city',
        'detail',
        'is_default'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'id', 'id');
    }
}

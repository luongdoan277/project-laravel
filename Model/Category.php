<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'slug',
        'group_id',
        'type',
        'is_enabled',
        'url_image',
        'created_user',
        'updated_user'
    ];

    public function createdUser() {
        return $this->belongsTo(User::class, 'created_user');
    }

    public function updatedUser() {
        return $this->belongsTo(User::class, 'updated_user');
    }

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_enabled', 1);
    }

    public function products() {
        return $this->hasMany(Product::class, 'category_id');
    }
}

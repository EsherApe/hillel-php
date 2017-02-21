<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['status'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('amount');
    }
}

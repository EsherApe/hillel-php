<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = ['status'];

    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}

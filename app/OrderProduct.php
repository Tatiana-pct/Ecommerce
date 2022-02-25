<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable =[
        'order_id', 'products_id', 'quaantity'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_line extends Model
{
    public function Order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}

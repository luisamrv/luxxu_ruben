<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection_product extends Model
{
    public function Product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function collection()
    {
    	return $this->belongsTo(Collection::class);
    }
}

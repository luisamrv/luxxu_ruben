<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function produc_sample_currencies()
    {
    	return $this->hasMany(Product_sample_currency::class);
    }
}

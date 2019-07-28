<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function sub_categories()
    {
    	return $this->hasMany(Sub_category::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'sub_category_id');
    }

    public function category_languages()
    {
    	return $this->hasMany(Category_language::class);
    }

    public function families()
    {
    	return $this->hasMany(Family::class);
    }
}

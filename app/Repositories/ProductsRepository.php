<?php

namespace App\Repositories;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\Sub_category;
use App\Product;
use App\Product_language;
use App\Product_sample;

use Validator;

class ProductsRepository
{

	public static function getAllProducts()
	{
		$all_products = Category::with(['category_languages' => function($query){ 
				$query->where('language_id', '=', 1)->get(); }, 
			'sub_categories.sub_category_languages' => function($query){ 
				$query->where('language_id', '=', 1)->get(); }, 
			'sub_categories.products' => function($query){ 
				$query->where('is_active', '=', 1)->orderBy('id', 'DESC')->get(); }
			])->orderBy('id', 'ASC')->get();

 	 	return $all_products;
 	}

 	public static function getProductsBySubCategory($collection)
	{
		$sub_category = Sub_category::join('sub_category_languages', 'sub_category_languages.sub_category_id', '=', 'sub_categories.id')->where('slug', '=', $collection)->where('sub_category_languages.language_id', '=', '1')->select('sub_categories.*', 'sub_category_languages.name')->first();

		$productsBySubcategory = array($sub_category->name => $sub_category->products()->where('is_active', '=', '1')->orderBy('products.brand')->with('product_options.option')->get());

		return $productsBySubcategory;
	}

 	public static function getProductsByCategory($category)
	{
		if($category == 'lighting'):
			$category_array = array(1, 2, 3, 4, 5, 6, 7);
		elseif($category == 'furniture'):
			$category_array = array(8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19);
		else:
			return 'error';
		endif;

		$categories = Category::find($category_array);


		$MotherCategory = array();

		foreach ($categories as $key => $category_item):
			array_push($MotherCategory, array('category' => $category_item, 'sub_categories' => array()));

			$sub_categories = $category_item->sub_categories()->join('sub_category_languages', 'sub_category_languages.sub_category_id', '=', 'sub_categories.id')->where('sub_category_languages.language_id', '=', '1')->select('sub_categories.*', 'sub_category_languages.name')->get();

			foreach ($sub_categories as $sub_category):
				array_push($MotherCategory[$key]['sub_categories'], array('sub_category' => $sub_category, 'products' => $sub_category->products()->where('is_active', '=', '1')->get()));
			endforeach;
		endforeach;

		return $MotherCategory;
	}

	public static function getProductDetail($product)
	{
		$product = Product::join('product_languages', 'product_languages.product_id', '=', 'products.id')->where('products.is_active', '=', '1')->where('products.slug', 'like', $product)->where('product_languages.language_id', '=', '1')->select('products.*', 'product_languages.description', 'product_languages.tec_info', 'product_languages.dimensions')->first();

		return $product;
	}

	public static function getFourRandomProducts()
	{
		$productsRandom = Product::inRandomOrder()->where('is_active', '=', '1')->limit(4)->with('product_options.option')->get();

		return $productsRandom;
	}

	public static function getMultipleProducts($products_array)
	{
		$productsRandom = Product::find($products_array);

		return $productsRandom;
	}

	public static function getBestSeller()
	{
		$product = Product::where('best_seller','=','1')->get();
		return $product;
	}
}
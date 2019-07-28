<?php

namespace App\Repositories;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Article;

use Validator;

class EbooksRepository
{
 	
	public static function getEbooks()
	{
		$ebooks = Article::where('articles.is_active', '=', '1')->where('articles.article_type_id', '=', 4)->get();

		return $ebooks;
	}
}
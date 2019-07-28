<?php

namespace App\Repositories;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Article;

use Validator;

class AmbiencesRepository
{
 	
	public static function getAmbiences()
	{
		$ambiences = Article::where('articles.is_active', '=', '1')->where('articles.article_type_id', '=', 3)->get();

		return $ambiences;
	}
}
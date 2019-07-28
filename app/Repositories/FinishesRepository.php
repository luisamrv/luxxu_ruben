<?php

namespace App\Repositories;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Finish;
use App\Finhish_language;
use App\Sample;
use App\Sample_language;

use Validator;

class FinishesRepository
{
	public static function getAllFinishesAndSamples()
	{
		$materials = array();

		$finishes = Finish::join('finish_languages', 'finish_languages.finish_id', '=', 'finishes.id')->where('finishes.is_active', '=', '1')->where('finish_languages.language_id', '=', '1')->select('finishes.slug', 'finish_languages.*')->get();

		foreach ($finishes as $key => $finish):
			array_push($materials, array('finish' => $finish, 'samples' => $finish->samples()->join('sample_languages', 'sample_languages.sample_id', '=', 'samples.id')->where('sample_languages.language_id', '=', 1)->where('samples.is_active', '=', 1)->where('samples.is_deleted', '=', 0)->select('samples.*', 'sample_languages.id as sample_language_id', 'sample_languages.*')->get()));
		endforeach;

		return $materials;
	}
}
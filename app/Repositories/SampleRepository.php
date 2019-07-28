<?php

namespace App\Repositories;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Finish;

use Validator;

class SampleRepository
{
	public static function getAllSamples()
	{
		$samples = array();

		foreach (Finish::join('finish_languages', 'finish_languages.finish_id', '=', 'finishes.id')->where('finish_languages.language_id', '=', '1')->where('finishes.is_active', '=', '1')->select('finishes.*', 'finish_languages.name as name')->get() as $finish):
		array_push($samples, array('finish_name' => $finish->name, 'finish_slug' => $finish->slug, 'samples' => $finish->samples()->join('sample_languages', 'sample_languages.sample_id', '=', 'samples.id')->where('sample_languages.language_id', '=', '1')->where('samples.is_active', '=', '1')->get()));
		endforeach;

		return $samples;
	}
}
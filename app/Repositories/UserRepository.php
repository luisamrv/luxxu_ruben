<?php

namespace App\Repositories;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

use App\User;
use App\User_level;

class UserRepository 
{
  public static function registerUser(Request $request, User_level $userLevel, $password)
  {
    $result = false;

    try {
      $user = new User();
      $user->name = $request->get('inputName');
      $user->email = $request->get('inputEmail');
      $user->password = bcrypt($password);
      $user->is_active = true;
      $user->user_level()->associate($userLevel);
      $user->timestamps = false;
      $user->save();

      $result = true;
    } catch (\Illuminate\Database\QueryException $e) {
      $result = false;
    } catch(\Exception $e) {
      $result = false;
    }
      

    return $result;
  }

  	
}
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class CategoryController extends Controller
{
	public function categories()
	{
		if(Auth::user()->id == email)
		{
			return response()->json(array('message' => 'success'));
		}else
		{
			echo 'jdsk';
		}
		//$categry = category_model::get();
	}
}

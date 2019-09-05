<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\profile_model;
class CategoryController extends Controller
{
	public function viewprofile(Request $request)
	{
		if ($request->ajax()) {
			$id = $request->previd;
			$showid = profile_model::where('id', $id)->first();
			//print_r($showid);die;
			if(Auth::check()){
				return response()->json(array('message' => 'success', 'show_id' => $showid));
			}else{
				return response()->json(array('error' => 'Something went wrong!'));
			}



		}
	}
}

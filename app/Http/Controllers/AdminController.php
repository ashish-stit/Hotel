<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\profile_model;
class AdminController extends Controller
{
	public function dashboard()
	{
		return view('adminlayout/layout');
	}
	public function adddocs(){
		$show_data = User::get();
		return view('admin/register_store', ['show_data' => $show_data]);
	}
	public function addprofile(){
		$profile_view = profile_model::get();
		return view('admin/viewprofile')->with('view',$profile_view);
	}
	public function storeProfile(Request $request){
		$profile = new profile_model();
		$profile->client_id = '1';
		$profile->client_document_id ='1';
		$profile->objective=$request->objective;
		$profile->name=$request->name;
		$profile->email=$request->email;
		$profile->skills=$request->skills;
		$profile->experience_year=$request->experience_year;
		$profile->experience_hotel=$request->experience_hotel;
		$profile->education=$request->education;
		$profile->resume=$request->resume;
		if($profile->save())
		{
			return redirect('admin/profileList');
		}
		else
		{
			echo 'error';
		}
	}
	public function EditProfiles(Request $request){
		if($request->ajax()){
			$id=$request->id;
			$profEdit = profile_model::where('id', $id)->first();
			if($profEdit){
				return response()->json(array('message', 'success', 'prof_Edit' => $profEdit));
			}else{
				return response()->json(array('error', 'Something went wrong!!'));
			}
		}
	}
	public function profileDelete($id){
		$removeProfile =  profile_model::find($id);
		if($removeProfile->delete()){
			echo "deleted";
		}
	}
}

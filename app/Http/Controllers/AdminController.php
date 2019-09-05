<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Models\profile_model;
class AdminController extends Controller
{

	public function index()
	{
		$client_detail=profile_model::get();
		
		return view('welcome')->with('details',$client_detail);
	}
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
		$profile->resume=request('image');
		$imagename = time().'.'.request()->image->getClientOriginalExtension();
		$profile->resume= '' . $imagename;
		request()->image->move(public_path('image'),$imagename);
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
		if ($request->ajax()) {
			$id = $request->proflId;
			$profEdit = profile_model::where('id', $id)->first();
			if ($profEdit) {
				return response()->json(array('message' => 'success', 'prof_Edit' => $profEdit));
			} else {
				return response()->json(array('error' => 'Something went Wrong!!'));
			}
		}
	}
	public function profileDelete($id){
		$removeProfile =  profile_model::find($id);
		if($removeProfile->delete()){
			return redirect('admin/profileList');
		}
	}
	public function updateProfile(Request $request){
		if ($request->isMethod('post') && $request->ajax() ){
			$posts = $request->post();
			$update_profile = profile_model::findOrFail($posts['id']);
			//print_r($update_profile);die;
			if($update_profile){
				$update_profile->id = $posts['id'];
				$update_profile->client_id = $posts['client_id'];
				$update_profile->client_document_id = $posts['client_document_id'];
				$update_profile->objective = $posts['addObjs'];
				$update_profile->name = $posts['addNames'];
				$update_profile->email = $posts['EmailBoxs'];
				$update_profile->skills = $posts['addskill'];
				$update_profile->experience_year = $posts['addexps'];
				$update_profile->experience_hotel = $posts['addexphotels'];
				$update_profile->education = $posts['addeducations'];
				//$update_profile->resume = $posts['uploadss'];
			}
			if($update_profile){
				$update_profile->save();
				return response()->json(array('message' => 'success', 'updte_profle' => $update_profile));
			}else{
				return response()->json(array('error' => 'Something went wrong'));
			}
		}
	}
	
	public function searching(){
		$profilesearchs = Input::get ( 'profilesearch' );
		//dd($q);return false;
		if($profilesearchs != ''){
		$user = profile_model::where('experience_year','LIKE','%'.$profilesearchs.'%')->orWhere('education','LIKE','%'.$profilesearchs.'%')->get();
		if(count($user) > 0){
			return view('welcome')->withDetails($user)->withQuery ( $profilesearchs );
		}
		else {
			return view ('welcome')->withMessage('No Details found. Try to search again !');
		}
	}
	}
}

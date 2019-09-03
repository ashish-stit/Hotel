<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
    public function uploaddocs(){
    	return view('admin/viewprofile');
    }
}

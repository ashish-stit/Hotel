<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/upload', 'HomeController@index')->name('upload');
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/admin/add', 'AdminController@dashboard')->name('admin.add');
Route::get('/admin/registered', 'AdminController@adddocs')->name('admin.registered');
Route::get('/admin/profileList', 'AdminController@addprofile')->name('admin.profileList');
Route::post('/admin/saveProfileList', 'AdminController@storeProfile');
Route::post('/admin/EditProfile','AdminController@EditProfiles');
Route::delete('/deleteProfile', 'AdminController@profileDelete');

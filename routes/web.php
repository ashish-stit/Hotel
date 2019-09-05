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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','AdminController@index');
//Admin Controller
Route::get('/admin/add', 'AdminController@dashboard')->name('admin.add');
Route::get('/admin/registered', 'AdminController@adddocs')->name('admin.registered');
Route::get('/admin/profileList', 'AdminController@addprofile')->name('admin.profileList');
Route::post('/admin/saveProfileList', 'AdminController@storeProfile');
Route::post('/admin/EditProfile','AdminController@EditProfiles');
Route::post('/updatingProfle', 'AdminController@updateProfile');
Route::get('/deleteProfile/{id}', 'AdminController@profileDelete')->name('/deleteProfile');
Route::get('/category_details', 'CategoryController@categories')->name('category');

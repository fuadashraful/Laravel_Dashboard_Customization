<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 



Route::group(['middleware'=>['auth','admin']],function(){
	// backend routes
	Route::get('/dashboard',function(){
		return view('backend.dashboard');
	})->name('dashboard');

	Route::get('/registered_user','admin\AdminController@registered_admin')->name('registered_user');
	Route::get('edit_user/{id}', ['as' => 'admin.edit_user', 'uses' => 'admin\AdminController@edit_user']);
	Route::put('edit_user/{id}', ['as' => 'admin.edit_user', 'uses' => 'admin\AdminController@edit_user_put']);
	Route::delete('delete_user/{id}', ['as' => 'admin.delete_user', 'uses' => 'admin\AdminController@delete_user']);
});
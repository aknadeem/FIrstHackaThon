<?php

use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\Input;

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

//Route::get('/Construction', function () { return redirect('login'); });

// usergroup
Route::group(['prefix' => '/', 'middleware' => 'auth'], function(){

	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


	// Route::get('home', function () { return redirect('dashboard/index'); });

	// Route::get('dashboard', function () { return redirect('dashboard/index'); });


	// Route::get('dashboard/index','DashboardController@index')->name('dashboard.index');


		
		//User Management Route

		Route::group(['namespace' => 'UserManagement','prefix' => '/UserManagement'], function() {

			Route::resource('users','UserController');

			Route::put('users/toggleStatus/{id}',[
				'uses' => 'UserController@toggleStatus',
				'as' => 'users.toggleStatus',
			]);
			Route::resource('usergroup','UserGroupController');

			//Route::get('users/change-password','UserController@change_pass')->name('password.change');

			Route::get('/users/password/change-password',[
				'uses' => 'UserController@change_pass',
				'as' => 'password.change',
			]);

			Route::put('/users/password/update-password/{id}',[
				'uses' => 'UserController@update_password',
				'as' => 'password.update',
			]);

		});

});




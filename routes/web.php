<?php


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('tables', ['as' => 'tables.index', 'uses' => 'App\Http\Controllers\TableController@index']);
	Route::get('menus', ['as' => 'menu.index', 'uses' => 'App\Http\Controllers\menuController@index']);
	Route::get('cafes', ['as' => 'cafes.index', 'uses' => 'App\Http\Controllers\CafeController@index']);
	Route::get('excelso', ['as' => 'excelso.index', 'uses' => 'App\Http\Controllers\ExcelsoController@index']);
});


Route::get('/coba', function () {
     return view('pages.coba');
});
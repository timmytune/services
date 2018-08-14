<?php
use App\services;
use Illuminate\Http\Request;
//use App\Http\Controllers\servicesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('services', 'servicesController@index');
Route::get('services/{id}', 'servicesController@show');
Route::post('services', 'servicesController@store');
Route::put('services/{id}', 'servicesController@update');
Route::delete('services/{id}', 'servicesController@delete');
Route::post('search/{query}', 'servicesController@search');

Route::post('reg', 'Auth\RegisterController@reg');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
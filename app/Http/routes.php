<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'UserController@getAllUser');
Route::post('signup', 'UserController@signUpNewUser');
Route::post('user', 'UserController@getAvailableAccess');
Route::post('report_watering', 'DeviceController@reportWatering');
Route::post('sensor', 'SensorController@insertSensorLog');
Route::get('comodity', 'ComodityController@getVegetableComodity');

Route::get('{device_token}/sensor/{port_number}', 'SensorController@getSensorLog');
Route::get('{device_token}', 'DeviceController@getAllDevice');
Route::post('{device_token}', 'DeviceController@setWateringMode');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

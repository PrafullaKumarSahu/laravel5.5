<?php

use Illuminate\Http\Request;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('hello', function(){
		return "hello";
	});

	//$api->get('tasks', 'TaskController@index');
	$api->get('tasks', 'App\Http\Controllers\TaskController@index');
	$api->get('tasks/{task}', 'App\Http\Controllers\TaskController@show');

	//$api->get('tasks/{task}', 'TaskController@show');

});
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
$api = app('Dingo\Api\Routing\Router');
Route::get('/', function () {
    return 'hell';
//    return view('welcome');
});
Route::get('ee','UserController@index' );


$api->version('v1', function ($api) {

    $api->get('test/get', 'App\Http\Controllers\UserController@index' );
    $api->get('test/get/user', 'App\Http\Controllers\UserController@getUsers');
    $api->get('test', function () {
       $users = DB::table('users')->get();

foreach ($users as $user)
{
    var_dump($user->name);
}
    });

});
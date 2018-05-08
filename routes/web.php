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
/**
 * @var \Illuminate\Routing\Router $router
 */
$router->auth();
/*Route::get('/', function () {
    return view('welcome');
});*/

$router->get('/', function () {
    return view('index');
});

Route::get('/admin1', function () {
    return view('admin.starter');
});

$router->get('/home', 'HomeController@index');
$router->group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () use ($router) {
    $router->get('/', 'IndexController@index');
});
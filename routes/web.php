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

$router->get('/', 'TournamentController@Index');
$router->post('/participant', 'TournamentController@storeParticipant')->name('storeParticipant');

Route::get('/admin1', function () {
    return view('admin.starter');
});

$router->get('/admin/points','Admin\PointsController@storePoints');
$router->get('/home', 'HomeController@index');
$router->group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () use ($router) {
    //$router->get('/', 'IndexController@index')->name('index');
    $router->resource('/', 'TournamentsController');
    //$router->resource('/', 'TournamentsController');//->name('index');
    $router->resource('tournaments', 'TournamentsController');//->name('tournaments');
    $router->resource('participants','ParticipantsController');
    //$router->get('points','PointsController@storePoints');
});

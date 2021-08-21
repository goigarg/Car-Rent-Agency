<?php
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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


//Home Routes
Route::get('/', 'CarController@index')->name('home');

Route::post('/search', 'CarController@search');

Route::get('/search', function() {
    return redirect('/');
});

Route::get('/car/add', 'CarController@showCar')->middleware('auth');

Route::post('/car/add', 'CarController@add');

Route::post('/car/rent', 'CarController@rent');

Route::patch('/car/edit', 'CarController@edit');

Route::get('/car/{id}', 'CarController@show');

Route::get('/edit/{id}', 'CarController@editCar');


//Auth Route
Auth::routes();

//Dashboard
Route::get('/home', 'HomeController@index');
Route::get('/home/rent', 'HomeController@rentReq');


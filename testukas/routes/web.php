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

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $date = new DateTime();
//    $radars = Radar::all();
//    return view('radars.index', [
//        'date' => $date,
//        'radars' => $radars
//    ]);
//});
//
//Route::get('/radars/{id}', function ($id) {
//    $radar =Radar::find($id);
//    return view('radars.show', compact('radar'));
//});


//associate
Route::get('/radars/{radar}/{driver}', 'RadarsController@associate');
Route::get('radars', 'RadarsController@index');
Route::get('/', 'RadarsController@index');
Route::get('radars/create', 'RadarsController@create');
Route::post('radars', 'RadarsController@store');
Route::get('radars/{radar}', 'RadarsController@show');
Route::get('radars/edit/{radar}', 'RadarsController@edit');
Route::put('radars/{radar}', 'RadarsController@update');
Route::delete('radars/{radar}', 'RadarsController@destroy');



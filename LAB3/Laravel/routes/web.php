<?php

use Illuminate\Support\Facades\Route;

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
// อันเก่า
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('lab06/{name?}', function ($name = null) {
  return "<h1>Welcome to " . $name . " homepage<h1>" . "<h3>This is the first time to run Laravel Framework";
});
Route::get('welcome/{firstname?}/{lastname?}', 'App\Http\Controllers\Controller@welcome');
Route::get('it/{firstname?}/{lastname?}', 'App\Http\Controllers\Controller@lab6Controller');
//----------------------------------------------------------------------------------

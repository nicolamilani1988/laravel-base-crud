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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','TestController@home')
-> name ('home');

Route::get('/guest/{id}', 'TestController@guest')
-> name ('guest');

Route::get('/create/guest', 'TestController@create')
-> name ('create');
Route::post('/store/guest', 'TestController@store')
    -> name('store');
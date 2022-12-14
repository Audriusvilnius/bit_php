<?php

use Illuminate\Support\Facades\Route;

// Uzsi use controleri ZooController as Zoo - kad renderintu turini
use App\Http\Controllers\ZooController as Zoo;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zoo/enter/{id}',[Zoo::class, 'enter']);
Route::get('/zoo/exit',fn()=>'Ate');
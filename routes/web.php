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

Route::get('/', 'App\Http\Controllers\Controller@homepage');
Route::get('/cadastro', 'App\Http\Controllers\Controller@cadastrar');
Route::get('/login', 'App\Http\Controllers\Controller@fazerLogin');


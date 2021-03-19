<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;

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

//Route::resource('categories', 'Api/CategoryController')->except(['create', 'edit']);
//Route::resource('membros','Api/CastMemberController');
Route::resource('genres','Api/GenreController')->except(['create', 'edit']);
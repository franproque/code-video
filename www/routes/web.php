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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('categories', 'Api\CategoryController')->except(['create', 'edit']);
//Lista os membros e os filmes que estão participando, 
Route::resource('membros','Api\CastMemberController')->except(['create', 'edit']);

//Lista todos os filmes, ou apenas um filme especifico pelo id
Route::resource('movies','Api\MovieController')->except(['create', 'edit']);

//Lista todos os generos, e vc pode busca o filme com determinado genero
Route::resource('genres','Api\GenreController')->except(['create', 'edit']);
//Lista todas as categorias e é possivel trazer o filme pela cateogira
Route::resource('categorias','Api\CategoriaController')->except(['create', 'edit']);

Route::resource('castmember','Api\MoviesCastMember')->except(['create','edit','index','show','destroy']);


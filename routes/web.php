<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('site.home');
Route::get('/sobre', 'SobreController@sobre')->name('site.sobre');
Route::get('/unidade', 'UnidadeController@unidade')->name('site.unidade');
Route::get('/logado', 'LoginController@entrar')->name('app.entrar');
//Route::get('/login', function(){return 'Login';})->name('site.login');


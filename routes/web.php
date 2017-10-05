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

Route::group(['prefix' => 'produtos'], function() {
    Route::get('galeria', [
    	'as'=>'produto.galeriaproduto',
    	'uses'=>'Produto\ProdutoController@galeria'
    ]);

    Route::get('descricao', [
    	'as'=>'produto.descricaoproduto',
    	'uses'=>'Produto\ProdutoController@descricao'
    ]);

    Route::get('carrinho',[
    	'as'=>'carrinho.carrinho',
    	'uses'=>'Produto\ProdutoController@carrinho'
    ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

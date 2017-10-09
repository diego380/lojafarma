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

Route::get('login2',[
	'as'=>'site.index',
	'uses'=>'Site\SiteController@index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'produtos'], function() {
    Route::get('galeria', [
    	'as'=>'produto.galeriaproduto',
    	'uses'=>'Produto\ProdutoController@galeria'
    ]);

    Route::get('descricao', [
    	'as'=>'produto.descricaoproduto',
    	'uses'=>'Produto\ProdutoController@descricao'
    ]);
});





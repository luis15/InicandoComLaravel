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

Route::get('aluno', 'Aluno\AlunoController@index');

Route::get('livro', ['uses' => 'LivroController@index', 'as' =>'livro.index']);

Route::get('produto', ['uses' => 'ProdutoController@getIndex', 'as' =>'produto.index']);
Route::get('produto/lista', ['uses' => 'ProdutoController@getLista', 'as' =>'produto.lista']);
Route::post('produto', ['uses' => 'ProdutoController@postLista', 'as' =>'produto.lista']);

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

Route::get('/contato', function(){
    return "Página de contato!";
});

Route::post('/contato', function(){
    return "Realizando Post";
});

Route::put('/contato', function(){
    return "Realizando PUT";
});

Route::delete('/contato', function(){
    return "Realizando Delete";
});
Route::match(['get', 'post'], 'sobre', function(){
  return "Trabalhando com match";
});
Route::any( 'todos', function(){
  $url = url('nova');
  return "Todos ".$url;
});
Route::get('/artigo/{id}', function($id){
    return "Artigo id: {$id}";
});
Route::get('/produto/{id?}/cor/{cor?}', function($id = null, $cor = "red"){
    return "Produto id: {$id} Cor ={$cor}";
});
Route::group(['prefix' => 'admin'], function(){
  Route::get('/contato', function(){
      return "Página de contato!";
  });
});

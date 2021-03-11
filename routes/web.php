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

Route::get('/', ['as' => 'site.login', 'uses' => 'Site\LoginController@index']);
Route::get('/login', ['as' => 'site.login', 'uses' => 'Site\LoginController@index']);
Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'Site\LoginController@entrar']);
Route::get('/login/sair', ['as' => 'site.login.sair', 'uses' => 'Site\LoginController@sair']);



Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin/contatos', ['as' => 'admin.contatos', 'uses' => 'ContatoController@index']);
    Route::get('/admin/contatos/adicionar', ['as' => 'admin.contatos.adicionar', 'uses' => 'ContatoController@adicionar']);
    Route::post('/admin/contatos/salvar', ['as' => 'admin.contatos.salvar', 'uses' => 'ContatoController@salvar']);
    Route::get('/admin/contatos/editar/{id}', ['as' => 'admin.contatos.editar', 'uses' => 'ContatoController@editar']);
    Route::get('/admin/contatos/visualizar/{id}', ['as' => 'admin.contatos.visualizar', 'uses' => 'ContatoController@visualizar']);
    Route::put('/admin/contatos/atualizar/{id}', ['as' => 'admin.contatos.atualizar', 'uses' => 'ContatoController@atualizar']);
    Route::get('/admin/contatos/deletar/{id}', ['as' => 'admin.contatos.deletar', 'uses' => 'ContatoController@deletar']);
    Route::get('/admin/contatos/telefone/visualizar/{id}', ['as' => 'admin.contatos.telefone.visualizar', 'uses' => 'ContatoController@visualizarTelefone']);
    Route::put('/admin/contatos/telefone/atualizar/{id}', ['as' => 'admin.contatos.telefone.atualizar', 'uses' => 'ContatoController@atualizarTelefone']);
    Route::get('/admin/contatos/telefone/editar/{id}', ['as' => 'admin.contatos.telefone.editar', 'uses' => 'ContatoController@editarTelefone']);
});



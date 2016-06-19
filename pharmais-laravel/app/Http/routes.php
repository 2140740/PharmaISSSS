<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('test', function () {
  return 'Testing a route';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::auth();

Route::get('home',  ['as' => 'home.login',
								'uses' => 'HomeController@index']);

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('medicamentos', ['as' => 'medicamentos.index',
								'uses' => 'medicamentoController@index']);

Route::resource('clientes','clienteController');

Route::resource('users','userController');


Route::get('users', ['as' => 'users.index',
								'uses' => 'userController@index']);

Route::get('addcarrinho/{id}',  ['as' => 'carrinho.add',
								'uses' => 'CarrinhoController@addtocarrinho']);

Route::get('cleancarrinho',  ['as' => 'carrinho.clean',
								'uses' => 'CarrinhoController@limparCarrinho']);

Route::get('decQuantidadeCarrinho/{id}',  ['as' => 'carrinho.dec',
								'uses' => 'CarrinhoController@decQuantidadeCarrinho']);

Route::get('LimparLinhaCarrinho/{id}',  ['as' => 'carrinho.remove',
								'uses' => 'CarrinhoController@removerLinhaCarrinho']);


Route::get('alterarEstado/{id}',  ['as' => 'user.edit',
								'uses' => 'userController@alterarEstado']);

Route::get('carrinho',  ['as' => 'carrinho.show',
								'uses' => 'CarrinhoController@show']);

 Route::get('/logout', function()
    {
        Auth::logout();
    Session::flush();
        return Redirect::to('/home');
    });




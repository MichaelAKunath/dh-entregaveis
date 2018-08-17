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

Route::get('/formulario',function(){  //abre o formulario de inclusão dos dados
  return view('formulario');
});
Route::get('/formatores',function(){  //abre o formulario de inclusão dos dados
  return view('fatores');
});

Route::get('/adicionar','Formcontroller@formulario');//abre o formulario de inclusão dos dados passando pelo controller

Route::post('/adicionar','Formcontroller@adicionar');  //chama a validação dos dados preenchidos

Route::get('/exibefilmes','Formcontroller@exibirfilmes');

Route::get('/editafilme/{id}','Formcontroller@editafilme');

Route::post('/editafilme/{id}','Formcontroller@gravafilme');

Route::get('/deletafilme/{id}','Formcontroller@deletafilme');

Route::post('/adicator','AtorController@adicionar');  //chama a validação dos dados preenchidos

Route::get('/exibeatores','AtorController@exibeatores');

Route::get('/editaator/{id}','Formcontroller@editaator');

Route::post('/editaator/{id}','Formcontroller@gravaator');

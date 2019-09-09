<?php


Route::get('/',  'IndexController@index');

Route::get('/index', 'IndexController@index');

Route::get('/cadastroCliente', 'ClienteController@cadastroCliente');
Route::post('/cadastroCliente', 'ClienteController@salvandoCliente');

Route::get('/cadastroPsicologo', 'PsicologoController@cadastroPsicologo');
Route::post('/cadastroPsicologo', 'PsicologoController@salvandoPsicologo');

Route::get('/clienteLogado', function () {
    return view('clienteLogado');
});


Route::get('/paraPsicologo', function () {
    return view('paraPsicologo');
});










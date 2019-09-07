<?php


Route::get('/',  'IndexController@index');

Route::get('/index', 'IndexController@index');

Route::get('/cadastroCliente', 'ClienteController@cadastroCliente');
Route::post('/cadastroCliente', 'ClienteController@salvandoCliente');

Route::get('/clienteLogado', function () {
    return view('clienteLogado');
});

Route::get('/cadastroPsicologo', function () {
    return view('cadastroPsicologo');
});

Route::get('/psicologoLogado', function () {
    return view('psicologoLogado');
});

Route::get('/paraPsicologo', function () {
    return view('paraPsicologo');
});










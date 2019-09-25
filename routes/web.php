<?php


Route::get('/',  'IndexController@index');

Route::get('/index', 'IndexController@index');

// Route::get('/cadastroCliente', 'ClienteController@cadastroCliente');
Route::post('/cadastroCliente', 'ClienteController@salvandoCliente');
Route::get('/concluirCadastroCliente', 'ClienteController@concluirCadastroCliente');
Route::get('/editarCadastroCliente/{id}', 'ClienteController@editarCadastroCliente');
Route::post('/editarCadastroCliente/{id}', 'ClienteController@alterarCadastroCliente');


Route::get('/cadastroPsicologo', 'PsicologoController@cadastroPsicologo');
Route::post('/cadastroPsicologo', 'PsicologoController@salvandoPsicologo');
Route::get('/editarCadastroPsicologo/{id}', 'PsicologoController@editarCadastroPsicologo');
Route::put('/editarCadastroPsicologo/{id}', 'PsicologoController@alterarCadastroPsicologo');
Route::delete('/excluirPerfilPsicologo/{id}', 'PsicologoController@removendoPsicologo');
Route::get('/psicologoLogado', 'PsicologoController@psicologoLogado');

Route::get('/clienteLogado', function () {
    return view('clienteLogado');
});

Route::get('/paraPsicologo', function () {
    return view('paraPsicologo');
});

Route::get('/comofunciona', function () {
    return view('comoFunciona');
});

Route::get('/faqCliente', function () {
    return view('faqCliente');
});

Route::get('/faqPsicologo', function () {
    return view('faqPsicologo');
});


// Route::get('/psicologoLogado', 'IndexController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

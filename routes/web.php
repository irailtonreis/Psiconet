<?php


Route::get('/',  'IndexController@index');

Route::get('/index', 'IndexController@index');

// Route::get('/cadastroCliente', 'ClienteController@cadastroCliente');
Route::post('/cadastroCliente', 'ClienteController@salvandoCliente');
Route::get('/concluirCadastroCliente', 'ClienteController@concluirCadastroCliente');
Route::get('/editarCadastroCliente/{id}', 'ClienteController@editarCadastroCliente');
Route::put('/editarCadastroCliente/{id}', 'ClienteController@alterarCadastroCliente');
Route::delete('/removerCliente/{id}', 'ClienteController@removendoCliente');


Route::get('/cadastroPsicologo', 'PsicologoController@cadastroPsicologo');
Route::post('/cadastroPsicologo', 'PsicologoController@salvandoPsicologo');
Route::get('/concluirCadastroPsicologo', 'PsicologoController@concluirCadastroPsicologo');
Route::get('/editarCadastroPsicologo/{id}', 'PsicologoController@editarCadastroPsicologo');
Route::put('/editarCadastroPsicologo/{id}', 'PsicologoController@alterarCadastroPsicologo');
Route::delete('/removerPsicologo/{id}', 'PsicologoController@removendoPsicologo');
Route::get('/psicologoLogado', 'PsicologoController@psicologoLogado');

Route::get('/clienteLogado', 'ClienteController@clientelogado');


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

Route::get('/psicologo/{id}','PsicologoController@psicologo');
Route::post('/consulta/{id}','PsicologoController@consulta');



// Route::get('/psicologoLogado', 'IndexController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

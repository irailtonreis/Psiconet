<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/cadastroCliente', function () {
    return view('cadastroCliente');
});

Route::get('/cadastroPsicologo', function () {
    return view('cadastroPsicologo');
});

Route::get('/paraPsicologo', function () {
    return view('paraPsicologo');
});

Route::get('/psicologoLogado', function () {
    return view('psicologoLogado');
});

Route::get('/clienteLogado', function () {
    return view('clienteLogado');
});






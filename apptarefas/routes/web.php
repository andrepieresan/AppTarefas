<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tarefas', function () {
    return view('tarefas');
});

Route::get('/historico', function () {
    return view('history');
});








/*
////---------ROTAS		
			
	HOME                        +++ GET
	ADICIONAR TAREFAS           +++ GET/POST
	LISTAR TAREFAS P FAZER      +++ GET/UPDATE/DELETE
	LISTAR TAREFAS CONCLUIDAS   +++ GET
................................................................. 
*/
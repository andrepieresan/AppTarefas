<?php

use Illuminate\Support\Facades\Route;
use backend\app\Models\Task;

Route::get('/home', function () {
    return view('welcome');
});
Route::prefix('/')->group(function () {
    Route::get('', function () {
        return 'paginas de todas as tarefas marcadas';
    });
   
    Route::post('', function () {
        return console.log('post de tarefas online');
    });
    Route::get('historico', function () {
        return "get historico tarefas ja concluidas";
    });
    Route::get('geral', function(){
        return "tarefas concluidas e marcadas";
    });
    
   
});

<?php

use Illuminate\Support\Facades\Route;
use backend\app\Models\Task;
use App\Http\Controllers\TaskController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/tarefas', [TaskController::class, 'marcadas']);

Route::post('/tarefas', [TaskController::class, 'criar']);

Route::get('/historico', [TaskController::class, 'todas']);



/*
Route::prefix('/')->group(function () {
   

    Route::get('historico', function () {
        return "get historico tarefas ja concluidas";
    });

    Route::get('geral', function(){
        return "tarefas concluidas e marcadas";
    });
    
   
});*/

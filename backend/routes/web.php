<?php

use Illuminate\Support\Facades\Route;
use backend\app\Models\Task;
use App\Http\Controllers\TaskController;



Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/tarefas')->group(function (){
    Route::get('', [TaskController::class, 'marcadas']);

    Route::post('', [TaskController::class, 'criar']);

    Route::get('concluidas', [TaskController::class, 'concluidas']);
});

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

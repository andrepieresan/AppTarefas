<?php

use Illuminate\Support\Facades\Route;
use backend\app\Models\Task;
use App\Http\Controllers\TaskController;



Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/tarefas')->group(function (){
    Route::get('', [TaskController::class, 'marcadas']);

    Route::post('', [TaskController::class, 'store']);

    Route::get('concluidas', [TaskController::class, 'concluidas']);
});

Route::get('/historico', [TaskController::class, 'todas']);

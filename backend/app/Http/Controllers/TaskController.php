<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Eloquent;
class TaskController extends Controller
{
    public function todas(){
        $tarefas = Task::all();
        echo($tarefas);
    }
    public function criar(){
        $novatask = Task::create([]);
        
    }
    public function marcadas(){
        $tarefa = Task::where('status','false')->get();
        echo($tarefas);
    }



}

<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Eloquent;
use Illuminate\Support\Facades\DB;
use \home\andrep\Desktop\AQUI\desafioDU\backend\app\Http\Requests\TaskRequest;
use App\Models\Flight;

class TaskController extends Controller
{   
    
    public function todas(){
        $tasks = DB::table('Task')->orderBy('data', 'asc')->get();
       return dd($tasks);
    }

    public function marcadas(){
        $tasks = DB::table('Task')->where('status','false')->get();
        return $tasks;
    }
    public function update(){
        $update = DB::table('Task')->where('');
    }
    public function criar(Task $task){
       $task= Task::create([
        'data' => '', 'horario' => '', 'assunto' => '', 'descricao' => '', 'status' => ''
       ]);
        
        //$task = new Task;

       // $task->data = $request->data;

       // $task->create();

        return dd($task);
        
    }
    



}

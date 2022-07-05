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
        $tasks = DB::table('Task')->get();
       return dd($tasks);
    }

    public function marcadas(){
        $tasks = DB::table('Task')->where('status','false')-> orderBy('data', 'asc')->get();
        return dd($tasks);
    }
    public function concluidas(){
        $tasks = DB::table('Task')->where('status','true')-> orderBy('data', 'asc')->get();
        return dd($tasks);
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

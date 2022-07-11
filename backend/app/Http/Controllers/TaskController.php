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
   
    public function store(){
       $task= DB::table('Task')-> insert([
        ['data' => '13-02', 'horario' => '14h', 'assunto' => 'cccccc', 'descricao' => 'iiiiiii', 'status' => 'false'],
    
        ['data' => '14-03', 'horario' => '16h', 'assunto' => 'ssss', 'descricao' => 'ibbbbbbbbbbbbb', 'status' => 'false'],
        ['data' => '09-05', 'horario' => '13h', 'assunto' => 'ccdddddfcccc', 'descricao' => 'immmmmmm', 'status' => 'false'],
        ['data' => '4-09', 'horario' => '11h', 'assunto' => 'cccsdafasdfasfccc', 'descricao' => 'illllllllll', 'status' => 'false'],
        ['data' => '09-11', 'horario' => '13h', 'assunto' => 'jjjjjjjj', 'descricao' => 'yyyyyyyyyy', 'status' => 'true'],
        ['data' => '04-01', 'horario' => '17h', 'assunto' => 'ooooooo', 'descricao' => 'kkkkkkkkkk', 'status' => 'true']
    
    ]);
        
        //$task = new Task;

       // $task->data = $request->data;

       // $task->create();

        return dd($task);
        
    }
    



}

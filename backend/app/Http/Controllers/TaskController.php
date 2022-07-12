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
    
     function todas(){
        $tasks = DB::table('Task')->get();
       return dd($tasks);
    }

     function marcadas(){
        $tasks = DB::table('Task')->where('status','false')-> orderBy('data', 'asc')->get();
        return dd($tasks);
    }
     function concluidas(){
        $tasks = DB::table('Task')->where('status','true')-> orderBy('data', 'asc')->get();
        return dd($tasks);
    }
   
     function store(Request $request){
        
        $task = $request->all();
        
      //  $request = DB::table('Task')->insertUsing(['data', 'horario', 'assunto', 'descricao', 'status']);


        
     /*$request= DB::table('Task')-> insertUsing([
        ['data', 'horario', 'assunto', 'descricao', 'status']
        
    ]);      
*/

            return dd($task);
    }
    



}

<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Eloquent;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{   
    
    public function todas(){
        $tasks = DB::table('Task')->orderBy('data', 'asc')->get();
       return dd($tasks);
    }

    public function marcadas(){
        $tasks = DB::table('Task')->where('status','false')->get();
        return dd($tasks);
    }
    
    public function criar(Request $request){
        $nova = DB::table('Task')->insert([
        'id' =>'22',
        'data'=>'30/02', 
        'horario'=>'11:20',
        'assunto'=>'comprar racao',
        'descricao'=>'powkoakpokaopwk',
        'status'=>'true',
        ]);
        return dd($nova);
        
    }
    



}

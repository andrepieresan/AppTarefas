<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskControler extends Controller
{
      /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = $request-> all();
 
    }
}

<?php

namespace App\Models;



class Task 
{
   
    protected $fillable = [
        'id',
        'data',
        'horario',
        'assunto',
        'descricao',
        'status',

    ];
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{

   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id->enable',
        'data->enable',
        'horario->enable',
        'assunto->enable',
        'descricao->enable',
        'status->enable'

    ];
}

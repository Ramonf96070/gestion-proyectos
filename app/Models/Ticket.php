<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'folio',
        'titulo',
        'descripcion',
        'prioridad',
        'estado',
        'user_id'
    ];
}

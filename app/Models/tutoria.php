<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutoria extends Model
{
    use HasFactory;
    protected $table = 'tutorias';
    protected $primaryKey = 'idTutorias';

    protected $fillable = [
        'alumno',
        'idProfesor',
        'idDia',
        'hora',
        'asunto',
    ];

}

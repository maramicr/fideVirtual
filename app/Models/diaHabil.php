<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diaHabil extends Model
{
    use HasFactory;
    protected $table = 'diashabiles';
    protected $fillable = ['dia_semana',];
}

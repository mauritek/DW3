<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    public $table = 'profesores';
     protected $fillable = [
    	'id',
    	'nombre',
        'apellido',
    	'ci',
        'gmail',
        'fecha_nacimiento',
        'direccion',
        'profesion',
        'materia'		
    ];
}

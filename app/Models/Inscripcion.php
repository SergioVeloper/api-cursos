<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    /** @use HasFactory<\Database\Factories\InscripcionFactory> */
    use HasFactory;
    protected $table = 'inscripciones';
    protected $fillable = [
        'id', 
        'fecha', 
        'curso_id', 
        'estudiante_id'
    ];

    function curso(){
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    function estudiante(){
        return $this->belongsTo(Estudiante::class, 'estudiante_id');
    }
}

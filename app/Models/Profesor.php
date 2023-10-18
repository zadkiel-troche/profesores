<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profesores';

    protected $fillable = [
        'nombre',
        'apellidos',
        'fecha_nacimiento',
        'email',
        'ci',
        'direccion',
        'profesion',
        'materia',
    ];
}

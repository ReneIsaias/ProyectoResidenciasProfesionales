<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'id',
        'nombrePersona',
        'apeUnoPersona',
        'apeDosPersona',
        'generoPersona',
        'semestrePersona',
        'grupoPersona',
        'statusPersona',
    ];
}

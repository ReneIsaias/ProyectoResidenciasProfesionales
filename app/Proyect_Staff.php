<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect_Staff extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calification',
        'descriptionCalification',
        'proyects_id',
        'staff_id',
        'situationproyects_id',
    ];
}

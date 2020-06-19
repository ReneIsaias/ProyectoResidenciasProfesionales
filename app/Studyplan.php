<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studyplan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'planStudies', 'planDate', 'planStatus',
    ];
}

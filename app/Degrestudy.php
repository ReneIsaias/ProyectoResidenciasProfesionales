<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degrestudy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'degreeStudy',
        'statusDegree',
    ];
}

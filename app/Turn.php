<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descriptionTurn', 'statusTurn', 'password',
    ];
}

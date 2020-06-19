<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situationproyect extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'projectSituation', 'statusSituation',
    ];
}

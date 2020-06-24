<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameTitular',
        'firstLastname',
        'secondLastname',
        'phoneTitular',
        'statusTitular',
        'posts_id',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covenant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'convenant',
        'descriptionConvenant',
        'statusConvenant',
    ];
}

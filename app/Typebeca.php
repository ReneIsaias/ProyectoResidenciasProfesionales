<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typebeca extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descriptionBeca', 'statusBeca',
    ];
}

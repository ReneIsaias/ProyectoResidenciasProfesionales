<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident_Staff extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
}

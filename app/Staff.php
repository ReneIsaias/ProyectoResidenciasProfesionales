<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keyStaff',
        'nameStaff',
        'firstLastname',
        'secondLastname',
        'emailStaff',
        'passwordStaff',
        'phoneStaff',
        'statusStaff',
        'id_posts',
        'id_degrestudies',
        'id_careers',
    ];
}

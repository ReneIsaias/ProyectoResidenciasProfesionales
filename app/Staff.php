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
        'phoneStaff',
        'statusStaff',
        'posts_id',
        'degrestudies_id',
        'careers_id',
    ];
}

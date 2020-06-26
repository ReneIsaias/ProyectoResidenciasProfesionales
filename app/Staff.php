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

    public function post()
    {
        return $this->belongsTo('App\Post', 'posts_id', 'id');
    }

    public function degrestudy()
    {
        return $this->belongsTo('App\Degrestudy', 'degrestudies_id', 'id');
    }

    public function career()
    {
        return $this->belongsTo('App\Career', 'careers_id', 'id');
    }
}

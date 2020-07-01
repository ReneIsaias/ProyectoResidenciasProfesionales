<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameRelative',
        'firstLastname',
        'secondLastname',
        'phoneRelative',
        'directionRelative',
        'statusRelative',
        'typefamilies_id',
    ];

    public function typefamily()
    {
        return $this->belongsTo('App\Typefamily', 'typefamilies_id', 'id');
    }
}

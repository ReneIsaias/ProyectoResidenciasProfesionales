<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typefamily extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descriptionType',
        'statusType',
    ];

    public function relatives(){
        return $this->hasMany('App\Relative','id_typefamilies')->withTimesTamps();
    }
}

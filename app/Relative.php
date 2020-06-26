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
        'addresRelative',
        'statusRelative',
        'typefamilies_id',
    ];

/*     public function typefamily(){
        return $this->belongsTo('App\Typefamily','id_typefamilies','id')->withTimestamps();
        return $this->belongsTo(Typefamily::class)->withwithTimestamps();
        return $this->belongsTo('App\Typefamily','typefamilies','id')->withTimesTamps();
        return $this->hasOne()
    } */

/*     public function typefamily(){
        return $this->hasOne('App\Typefamily','typefamilies_id')->withTimesTamps();
    } */

    public function typefamily()
    {
        return $this->belongsTo('App\Typefamily', 'typefamilies_id', 'id');
    }
}

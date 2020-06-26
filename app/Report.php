<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameReport',
        'descriptionReport',
        'statusReport',
        'typefiles_id',
    ];

   /*  public function typefile(){
        return $this->hasMany('App\Typefile','typefiles_id')->withTimesTamps();
    } */


    public function typefile()
    {
        return $this->belongsTo('App\Typefile', 'typefiles_id', 'id');
    }
}

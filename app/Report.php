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
        'fileReport',
        'statusReport',
        'typefiles_id',
    ];

    public function typefile()
    {
        return $this->belongsTo('App\Typefile', 'typefiles_id', 'id');
    }

    public function proyects(){
        return $this->belongsToMany('App\Proyect')->withTimesTamps();
    }
}

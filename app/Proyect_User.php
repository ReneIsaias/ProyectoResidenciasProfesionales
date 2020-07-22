<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect_User extends Model
{
    protected $fillable = [
        'calification',
        'descriptionCalification',
        'proyect_id',
        'user_id',
    ];

   /*  public function proyects(){
        return $this->belongsToMany('App\Proyect')->withTimesTamps();
    }

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    } */

   /*  public function proyects()
    {
        return $this->belongsTo('App\Proyect');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    } */

    public function proyects()
    {
        return $this->belongsTo('App\Proyect','proyect_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}


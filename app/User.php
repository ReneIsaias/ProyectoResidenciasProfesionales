<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Permission\Traits\UserTrait;

class User extends Authenticatable
{
    use Notifiable, UserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keyUser',
        'avatar',
        'nameUser',
        'firstLastname',
        'secondLastname',
        'phoneUser',
        'name',
        'email',
        'password',
        'statusUser',
        'posts_id',
        'degrestudies_id',
        'careers_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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

    public function residents(){
        return $this->belongsToMany('App\Resident')->withTimesTamps();
    }

    public function proyects(){
        return $this->belongsToMany('App\Proyect')->withTimesTamps();
    }

}

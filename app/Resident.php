<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'residentRegistration',
        'nameResident',
        'firtsLastnameResident',
        'secondLastnameResident',
        'emailResident',
        'phoneResident',
        'periodResident',
        'directionResident',
        'cityResident',
        'cpResident',
        'statusResident',
        'careers_id',
        'typesaves_id',
        'semesters_id',
        'studyplans_id',
        'relatives_id',
        'typebecas_id',
    ];

    public function career()
    {
        return $this->belongsTo('App\Career', 'careers_id', 'id');
    }

    public function semester()
    {
        return $this->belongsTo('App\Semester', 'semesters_id', 'id');
    }

    public function typebeca()
    {
        return $this->belongsTo('App\Typebeca', 'typebecas_id', 'id');
    }

    public function typesafe()
    {
        return $this->belongsTo('App\Typesafe', 'typesaves_id', 'id');
    }

    public function studyplan()
    {
        return $this->belongsTo('App\Studyplan', 'studyplans_id', 'id');
    }

    public function relative()
    {
        return $this->belongsTo('App\Relative', 'relatives_id', 'id');
    }

    public function users(){
        return $this->belongsToMany('App\User', 'resident_user', 'id')->withTimesTamps();
    }
}

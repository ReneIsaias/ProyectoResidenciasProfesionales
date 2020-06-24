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
        'addessResidente',
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
}

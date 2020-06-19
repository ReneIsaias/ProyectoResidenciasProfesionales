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
        'passwordResident',
        'phoneResident',
        'periodResident',
        'id_careers',
        'id_typesaves',
        'id_semesters',
        'id_studyplans',
        'id_relatives',
        'id_typebecas',
    ];
}

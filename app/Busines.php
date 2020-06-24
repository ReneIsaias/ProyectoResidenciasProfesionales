<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Busines extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rfcBusiness',
        'nameBusiness',
        'emailBusiness',
        'misionBusiness',
        'addresBusiness',
        'coloniaBusiness',
        'cityBusiness',
        'phoneBusiness',
        'cpBusiness',
        'personFirma',
        'postPerson',
        'statusBusines',
        'titulars_id',
        'staff_id',
        'covenants_id',
        'turns_id',
        'sectors_id',
    ];
}

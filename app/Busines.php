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
        'phoneBusiness',
        'cpBusiness',
        'statusBusines',
        'id_titulars',
        'id_staff',
        'id_covenants',
        'id_turns',
        'id_sectors',
    ];
}

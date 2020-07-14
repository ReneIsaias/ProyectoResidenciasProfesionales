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
        'directionBusiness',
        'coloniaBusiness',
        'cityBusiness',
        'phoneBusiness',
        'cpBusiness',
        'personFirma',
        'postPerson',
        'statusBusines',
        'titulars_id',
        'user_id',
        'covenants_id',
        'turns_id',
        'sectors_id',
    ];

    public function titular()
    {
        return $this->belongsTo('App\Titular', 'titulars_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function covenant()
    {
        return $this->belongsTo('App\Covenant', 'covenants_id', 'id');
    }

    public function turn()
    {
        return $this->belongsTo('App\Turn', 'turns_id', 'id');
    }

    public function sector()
    {
        return $this->belongsTo('App\Sector', 'sectors_id', 'id');
    }
}

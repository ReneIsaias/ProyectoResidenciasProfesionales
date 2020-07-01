<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keyProyect',
        'nameProyect',
        'descriptionProyect',
        'objGeneProyect',
        'objEspeciProyect',
        'JustifyProject',
        'dateStart',
        'dateEnd',
        'qualificationProyect',
        'revisionProyect',
        'dateRevision',
        'hourlyProyect',
        'dateRealRevicion',
        'statusProject',
        'situationproyects_id',
        'busines_id',
        'residents_id',
    ];

    public function situationproyect()
    {
        return $this->belongsTo('App\Situationproyect', 'situationproyects_id', 'id');
    }

    public function busine()
    {
        return $this->belongsTo('App\Busines', 'busines_id', 'id');
    }

    public function resident()
    {
        return $this->belongsTo('App\Resident', 'residents_id', 'id');
    }
}

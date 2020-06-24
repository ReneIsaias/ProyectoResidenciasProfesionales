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
        'reports_id',
        'busines_id',
        'residents_id',
    ];
}

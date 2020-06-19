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
        'objetivesProyect',
        'dateStart',
        'dateEnd',
        'qualificationProyect',
        'revisionProyect',
        'dateRevision',
        'hourlyProyect',
        'dateRealRevicion',
        'id_situationproyects',
        'id_reports',
        'id_busines',
        'id_residents',
    ];
}

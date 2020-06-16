<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyects', function (Blueprint $table) {
            $table->id();
            $table->string('keyProyect',50)->unique();
            $table->string('nameProyect',200)->unique();
            $table->string('descriptionProyect');
            $table->string('objetivesProyect');
            $table->date('dateStart');
            $table->date('dateEnd');
            $table->integer('qualificationProyect')->nullable();
            $table->string('revisionProyect')->nullable();
            $table->date('dateRevision')->nullable();
            $table->string('hourlyProyect');
            $table->date('dateRealRevicion')->nullable();
            $table->foreignId('id_situationproyects')->references('id')->on('situationproyects')->onDelete('cascade')->nullable();
            $table->foreignId('id_reports')->references('id')->on('reports')->onDelete('cascade')->nullable();
            $table->foreignId('id_busines')->references('id')->on('busines')->onDelete('cascade');
            $table->foreignId('id_residents')->references('id')->on('residents')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyects');
    }
}

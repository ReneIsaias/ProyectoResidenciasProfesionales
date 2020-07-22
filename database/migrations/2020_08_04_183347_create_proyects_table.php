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
            $table->string('objGeneProyect');
            $table->string('objEspeciProyect');
            $table->string('JustifyProject');
            $table->date('dateStart');
            $table->date('dateEnd');
            $table->integer('qualificationProyect')->nullable();
            $table->string('revisionProyect')->nullable();
            $table->date('dateRevision')->nullable();
            $table->string('hourlyProyect');
            $table->date('dateRealRevicion')->nullable();
            $table->boolean('statusProject');
            $table->foreignId('situationproyects_id')->nullable()->references('id')->on('situationproyects')->onDelete('cascade')->onUpdate('cascade');
<<<<<<< HEAD
            $table->foreignId('busines_id')->references('id')->on('busines')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->foreignId('busines_id')->nullable()->references('id')->on('busines')->onDelete('cascade')->onUpdate('cascade');
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
            $table->foreignId('residents_id')->nullable()->references('id')->on('residents')->onDelete('cascade')->onUpdate('cascade');
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

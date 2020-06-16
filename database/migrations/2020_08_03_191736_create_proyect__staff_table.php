<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyect__staff', function (Blueprint $table) {
            $table->id();
            $table->integer('calification');
            $table->string('descriptionCalification',200)->nullable();
            $table->foreignId('id_proyects')->references('id')->on('proyects')->onDelete('cascade');
            $table->foreignId('id_staff')->references('id')->on('staff')->onDelete('cascade');
            $table->foreignId('id_situationproyects')->references('id')->on('situationproyects')->onDelete('cascade');
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
        Schema::dropIfExists('proyect__staff');
    }
}

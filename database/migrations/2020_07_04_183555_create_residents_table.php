<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('residentRegistration',20)->unique();
            $table->string('nameResident',30);
            $table->string('firtsLastnameResident',30);
            $table->string('secondLastnameResident',30)->nullable();
            $table->string('emailResident',50)->unique();
            $table->string('passwordResident',50);
            $table->string('phoneResident',20);
            $table->string('periodResident',100)->nullable();
            $table->foreignId('id_careers')->references('id')->on('careers')->onDelete('cascade');
            $table->foreignId('id_typesaves')->references('id')->on('typesaves')->onDelete('cascade');
            $table->foreignId('id_semesters')->references('id')->on('semesters')->onDelete('cascade');
            $table->foreignId('id_studyplans')->references('id')->on('studyplans')->onDelete('cascade');
            $table->foreignId('id_relatives')->references('id')->on('relatives')->onDelete('cascade');
            $table->foreignId('id_typebecas')->references('id')->on('typebecas')->onDelete('cascade');
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
        Schema::dropIfExists('residents');
    }
}

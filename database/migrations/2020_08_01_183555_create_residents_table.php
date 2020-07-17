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
            $table->string('secondLastnameResident',30);
            $table->string('emailResident',50)->unique();
            $table->string('phoneResident',20)->unique();
            $table->string('periodResident',100)->nullable();
            $table->string('directionResident',200);
            $table->string('cityResident',100);
            $table->string('cpResident',10);
            $table->boolean('statusResident');
            $table->foreignId('careers_id')->references('id')->on('careers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('typesaves_id')->references('id')->on('typesaves')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('semesters_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('studyplans_id')->nullable()->references('id')->on('studyplans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('relatives_id')->nullable()->references('id')->on('relatives')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('typebecas_id')->references('id')->on('typebecas')->onDelete('cascade')->onUpdate('cascade');
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

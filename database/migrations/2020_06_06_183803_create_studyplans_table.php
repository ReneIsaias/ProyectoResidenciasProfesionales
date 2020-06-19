<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studyplans', function (Blueprint $table) {
            $table->id();
            $table->string('planStudies',100)->unique();
            /* $table->string('descriptionPlan',200)->nullable();  */
            $table->date('planDate');
            $table->boolean('planStatus');
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
        Schema::dropIfExists('studyplans');
    }
}

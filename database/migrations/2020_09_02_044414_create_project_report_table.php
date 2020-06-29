<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_report', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyects_id')->references('id')->on('proyects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('reports_id')->references('id')->on('reports')->onDelete('cascade')->onUpdate('cascade')->nullable();
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
        Schema::dropIfExists('project_report');
    }
}

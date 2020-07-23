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
            $table->foreignId('proyect_id')->references('id')->on('proyects')->onDelete('cascade')->onUpdate('cascade');
<<<<<<< HEAD
            $table->foreignId('report_id')->nullable()->references('id')->on('reports')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->foreignId('report_id')->references('id')->on('reports')->onDelete('cascade')->onUpdate('cascade')->nullable();
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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

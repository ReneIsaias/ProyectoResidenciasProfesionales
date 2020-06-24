<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            $table->id();
            $table->string('nameRelative',30);
            $table->string('firstLastname',30);
            $table->string('secondLastname',30);
            $table->string('phoneRelative',20);
            $table->string('addresRelative',200);
            $table->boolean('statusRelative');
            $table->foreignId('typefamilies_id')->references('id')->on('typefamilies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('relatives');
    }
}

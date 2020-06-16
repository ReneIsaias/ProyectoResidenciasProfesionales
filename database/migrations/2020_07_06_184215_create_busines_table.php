<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busines', function (Blueprint $table) {
            $table->id();
            $table->string('rfcBusiness',50)->unique();
            $table->string('nameBusiness',100);
            $table->string('emailBusiness')->unique();
            $table->string('misionBusiness');
            $table->string('addresBusiness');
            $table->string('phoneBusiness',50);
            $table->string('cpBusiness',10);
            $table->boolean('statusBusines');
            $table->foreignId('id_titulars')->references('id')->on('titulars')->onDelete('cascade');
            $table->foreignId('id_staff')->references('id')->on('staff')->onDelete('cascade');
            $table->foreignId('id_covenants')->references('id')->on('covenants')->onDelete('cascade');
            $table->foreignId('id_turns')->references('id')->on('turns')->onDelete('cascade');
            $table->foreignId('id_sectors')->references('id')->on('sectors')->onDelete('cascade');
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
        Schema::dropIfExists('busines');
    }
}

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
            $table->string('rfcBusiness',50);
            $table->string('nameBusiness',200);
            $table->string('emailBusiness',100);
            $table->string('misionBusiness');
            $table->string('directionBusiness',200);
            $table->string('coloniaBusiness',200);
            $table->string('cityBusiness',100);
            $table->string('phoneBusiness',20);
            $table->string('cpBusiness',10);
            $table->string('personFirma',100);
            $table->string('postPerson',100);
            $table->boolean('statusBusines');
            $table->foreignId('titulars_id')->nullable()->references('id')->on('titulars')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
<<<<<<< HEAD
            $table->foreignId('covenants_id')->nullable()->references('id')->on('covenants')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->foreignId('covenants_id')->references('id')->on('covenants')->onDelete('cascade')->onUpdate('cascade');
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
            $table->foreignId('turns_id')->references('id')->on('turns')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('sectors_id')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
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

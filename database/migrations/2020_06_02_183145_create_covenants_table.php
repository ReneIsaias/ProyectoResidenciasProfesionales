<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covenants', function (Blueprint $table) {
            $table->id();
            $table->string('convenant',50)->unique();
            /* $table->string('descriptionConvenant',100)->nullable();  */
            $table->boolean('statusConvenant');
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
        Schema::dropIfExists('covenants');
    }
}

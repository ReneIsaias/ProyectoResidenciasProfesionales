<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('keyStaff',30)->unique();
            $table->string('nameStaff',30);
            $table->string('firstLastname',30);
            $table->string('secondLastname',30);
            $table->string('emailStaff',50);
            $table->string('phoneStaff',20);
            $table->boolean('statusStaff');
            $table->foreignId('posts_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('degrestudies_id')->references('id')->on('degrestudies')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('careers_id')->references('id')->on('careers')->onDelete('cascade')->onUpdate('cascade')->nullable();
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
        Schema::dropIfExists('staff');
    }
}

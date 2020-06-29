<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposAtUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',  function(Blueprint $table) {

            $table->string('keyUser',30)->unique()->nullable()->after('id');
            $table->string('nameUser',30)->nullable()->after('keyUser');
            $table->string('firstLastname',30)->nullable()->after('nameUser');
            $table->string('secondLastname',30)->nullable()->after('firstLastname');
            $table->string('phoneUser',20)->nullable()->after('secondLastname');
            $table->boolean('statusUser')->nullable()->after('password');
            $table->foreignId('posts_id')->nullable()->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('degrestudies_id')->nullable()->references('id')->on('degrestudies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('careers_id')->nullable()->references('id')->on('careers')->onDelete('cascade')->onUpdate('cascade');
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
        //
    }
}

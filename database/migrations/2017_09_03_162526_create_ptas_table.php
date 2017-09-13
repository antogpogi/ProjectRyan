<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ptaFname');
            $table->string('ptaLname');
            $table->string('ptaMi');
            $table->string('ptaPosition');
            $table->string('ptaMrs');
            $table->string('slug');
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
        Schema::dropIfExists('ptas');
    }
}

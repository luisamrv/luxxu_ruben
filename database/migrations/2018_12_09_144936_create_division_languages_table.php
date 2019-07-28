<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('division_id')->index()->unsigned();
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->integer('language_id')->index()->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division_languages');
    }
}

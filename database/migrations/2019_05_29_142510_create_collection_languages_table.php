<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('collection_id')->index()->unsigned();
            $table->foreign('collection_id')->references('id')->on('collections');
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
        Schema::dropIfExists('collection_languages');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoryLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id')->index()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
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
        Schema::dropIfExists('sub_category_languages');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('product_id')->index()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('language_id')->index()->unsigned();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->text('description');
            $table->text('tec_info');
            $table->text('dimensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_languages');
    }
}

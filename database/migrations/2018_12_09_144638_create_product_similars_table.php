<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSimilarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_similars', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('similar_id')->index()->unsigned();
            $table->foreign('similar_id')->references('id')->on('similars');
            $table->integer('product_id')->index()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_similars');
    }
}

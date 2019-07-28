<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_samples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->index()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('sample_id')->index()->unsigned();
            $table->foreign('sample_id')->references('id')->on('samples');
            $table->integer('qtd_usa');
            $table->integer('qtd_ww');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_samples');
    }
}

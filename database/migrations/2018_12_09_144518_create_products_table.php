<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_category_id')->index()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->string('name');
            $table->string('slug')->index();
            $table->boolean('best_seller');
            $table->boolean('is_new');
            $table->boolean('is_active');
            $table->boolean('is_deleted');
            $table->boolean('has_pdf');
            $table->text('key_words');
            $table->text('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

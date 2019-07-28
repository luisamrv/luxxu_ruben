<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->index()->unsigned();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('division_id')->index()->unsigned();
            $table->foreign('division_id')->references('id')->on('divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_divisions');
    }
}

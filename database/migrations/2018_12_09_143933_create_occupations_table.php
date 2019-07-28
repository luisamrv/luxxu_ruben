<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOccupationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        DB::table('occupations')->insert(
            [
                ['name' =>'Agent'],
                ['name' =>'Architect'],
                ['name' =>'Dealer'],
                ['name' =>'Designer'],
                ['name' =>'Decorator'],
                ['name' =>'Interior Designer'],
                ['name' =>'Manufacturer'],
                ['name' =>'Press'],
                ['name' =>'Retail'],
                ['name' =>'Student'],
                ['name' =>'Other']
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occupations');
    }
}

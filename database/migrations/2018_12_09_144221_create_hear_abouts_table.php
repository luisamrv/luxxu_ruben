<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHearAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hear_abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        DB::table('hear_abouts')->insert(
            [
                ['name' => 'Product Request'],
                ['name' => 'Agent / Store / Showroom'],
                ['name' => 'Business Partners'],
                ['name' => 'Newsletter'],
                ['name' => 'Facebook'],
                ['name' => 'Linkedin'],
                ['name' => 'Other Social Networks'],
                ['name' => 'Email Marketing'],
                ['name' => 'Blog or Online Publication'],
                ['name' => 'Magazine']
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
        Schema::dropIfExists('hear_abouts');
    }
}

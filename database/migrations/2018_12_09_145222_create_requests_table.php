<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_type_id')->index()->unsigned();
            $table->foreign('request_type_id')->references('id')->on('request_types');
            $table->integer('client_id')->index()->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->integer('product_id')->index()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->text('comment')->nullable();
            $table->dateTime('requested_at');
            $table->dateTime('viewed_at')->nullable();
            $table->boolean('aproved');
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}

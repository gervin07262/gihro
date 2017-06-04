<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kid_id')->unsigned()->nullable();
            $table->foreign('kid_id')->references('id')->on('kids');
            $table->string('breakfast',3)->nullable();
            $table->string('lunch',3)->nullable();
            $table->string('snack',3)->nullable();
            $table->addColumn('tinyInteger', 'bowl_movement', ['lenght' => 1]);
            $table->addColumn('tinyInteger', 'urination', ['lenght' => 1]);
            $table->addColumn('tinyInteger', 'escapes', ['lenght' => 1]);
            $table->string('activities',50)->nullable();
            $table->addColumn('tinyInteger', 'nap', ['lenght' => 1]);
            $table->string('nap_time',10)->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}

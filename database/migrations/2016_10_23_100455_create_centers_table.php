<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('province_id')->unsigned()->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->integer('location_id')->unsigned()->nullable();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('address')->nullable();
            $table->string('cp')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('centers');
    }
}

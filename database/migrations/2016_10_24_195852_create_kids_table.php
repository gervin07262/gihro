<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('classroom_id')->unsigned()->nullable();
          $table->foreign('classroom_id')->references('id')->on('classrooms');
          $table->integer('user_id')->unsigned()->nullable();
          $table->foreign('user_id')->references('id')->on('users');
          $table->string('name')->nullable();
          $table->string('surnames')->nullable();
          $table->string('path')->nullable();
          $table->text('allergies')->nullable();
          $table->text('diseases')->nullable();
          $table->text('medicines')->nullable();
          $table->string('name_father')->nullable();
          $table->string('surnames_father')->nullable();
          $table->string('dni_father')->nullable();
          $table->string('phone_father')->nullable();
          $table->string('name_authorized')->nullable();
          $table->string('surnames_authorized')->nullable();
          $table->string('dni_authorized')->nullable();
          $table->string('phone_authorized')->nullable();
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
        Schema::dropIfExists('kids');
    }
}

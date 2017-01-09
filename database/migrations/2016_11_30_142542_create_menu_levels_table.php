<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {/*
        Schema::create('menus_level1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->string('menu_key');
            $table->string('menu_level');
            $table->string('description');
            $table->double('price');
            $table->string('type');
            $table->timestamp('published_at');
            $table->timestamps();
            $table->integer('menu_id')->unsigned();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('menus_level1s');
    }
}

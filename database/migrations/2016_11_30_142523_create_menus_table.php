<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_level2s', function (Blueprint $table) {
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
        });

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
        });

        Schema::create('menus', function (Blueprint $table) {
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
            //url
            //image
            //成分
         });

        /*
         * add foreign keys
         */
        Schema::table('menus_level1s', function($table) {
            $table->foreign('menu_id')->references('id')->on('menus');
        });

         Schema::table('menus_level2s', function($table) {
            $table->foreign('menu_id')->references('id')->on('menus_level1s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menus');
        Schema::drop('menus_level1s');
        Schema::drop('menus_level2s');
    }
}

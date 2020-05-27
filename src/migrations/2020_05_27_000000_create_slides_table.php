<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('slider.table', 'slides'), function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active')->default(1)->index();
            $table->string('title');
            $table->string('head')->nullable();
            $table->text('images')->nullable();
            $table->text('text')->nullable();
            $table->string('button1')->nullable();
            $table->string('link1')->nullable();
            $table->string('button2')->nullable();
            $table->string('link2')->nullable();
            $table->string('button3')->nullable();
            $table->string('link3')->nullable();
            $table->string('button4')->nullable();
            $table->string('link4')->nullable();
            $table->integer('sort')->nullable();
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
        Schema::drop(config('slider.table', 'slides'));
    }
}

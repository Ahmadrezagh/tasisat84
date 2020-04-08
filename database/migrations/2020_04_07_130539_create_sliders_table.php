<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('type');
            $table->text('img');
            $table->text('title');
            $table->text('desc');
            $table->text('subtitle')->nullable();
            $table->text('btn_white')->nullable();
            $table->text('btn_white_link')->nullable();
            $table->text('btn_orange')->nullable();
            $table->text('btn_orange_link')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_logiccs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('store_1')->nullable();
            $table->integer('store_2')->nullable();
            $table->integer('store_3')->nullable();
            $table->integer('store_4')->nullable();
            $table->integer('store_5')->nullable();
            $table->integer('store_6')->nullable();
            $table->integer('store_7')->nullable();
            $table->integer('store_8')->nullable();
            $table->integer('store_9')->nullable();
            $table->integer('store_10')->nullable();
            $table->integer('store_11')->nullable();
            $table->integer('store_12')->nullable();
            $table->integer('counter')->nullable();
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
        Schema::dropIfExists('data_logiccs');
    }
};

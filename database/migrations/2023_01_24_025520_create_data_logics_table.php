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
        Schema::create('data_logics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('logic_1')->nullable();
            $table->integer('logic_2')->nullable();
            $table->integer('logic_3')->nullable();
            $table->integer('logic_4')->nullable();
            $table->integer('logic_5')->nullable();
            $table->integer('logic_6')->nullable();
            $table->integer('logic_7')->nullable();
            $table->integer('logic_8')->nullable();
            $table->integer('logic_9')->nullable();
            $table->integer('logic_10')->nullable();
            $table->integer('sum')->nullable();
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
        Schema::dropIfExists('data_logics');
    }
};

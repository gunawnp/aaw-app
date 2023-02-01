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
        Schema::create('pretests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('no_1')->nullable();
            $table->string('no_2')->nullable();
            $table->string('no_3')->nullable();
            $table->string('no_4')->nullable();
            $table->string('no_5')->nullable();
            $table->string('no_6')->nullable();
            $table->string('no_7')->nullable();
            $table->string('no_8')->nullable();
            $table->string('no_9')->nullable();
            $table->string('no_10')->nullable();
            $table->string('co_1')->nullable();
            $table->string('co_2')->nullable();
            $table->string('co_3')->nullable();
            $table->string('co_4')->nullable();
            $table->string('co_5')->nullable();
            $table->string('co_6')->nullable();
            $table->string('co_7')->nullable();
            $table->string('co_8')->nullable();
            $table->string('co_9')->nullable();
            $table->string('co_10')->nullable();
            $table->integer('judge')->nullable();
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
        Schema::dropIfExists('pretests');
    }
};

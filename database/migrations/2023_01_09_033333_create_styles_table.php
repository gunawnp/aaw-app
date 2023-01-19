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
        Schema::create('styles', function (Blueprint $table) {
            $table->id();
            $table->string('que');
            $table->string('activist')->nullable();
            $table->string('reflector')->nullable();
            $table->string('theorist')->nullable();
            $table->string('pragmatist')->nullable();
            $table->string('title_style')->nullable();
            $table->string('cap_style')->nullable();
            $table->text('desc_style')->nullable();
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
        Schema::dropIfExists('styles');
    }
};

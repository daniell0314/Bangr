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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->timestamp('start');
            $table->timestamp('end');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('artist_id');
            $table->unsignedBigInteger('studio_id');

    		$table->foreign('user_id')->references('id')->on('users');
    		$table->foreign('artist_id')->references('id')->on('users');
    		$table->foreign('studio_id')->references('id')->on('studios');


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
        Schema::dropIfExists('appointments');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelPcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_processor');
            $table->unsignedBigInteger('id_mb');
            $table->foreign('id_processor')->references('id')->on('processors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_mb')->references('id')->on('mother_boards')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('video')->nullable();;
            $table->string('power_supply');
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
        Schema::dropIfExists('pc');
    }
}




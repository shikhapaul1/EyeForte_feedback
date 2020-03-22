<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('bill');
            $table->string('mobile');
            $table->string('email');
            $table->string('Social_Media');
            $table->string('satisfied');
            $table->string('Very');
            $table->string('Good');
            $table->string('Yes');
            $table->string('Every');
            $table->string('No');
            $table->string('selection');
            $table->string('shopping');
            $table->string('satisfy');
            $table->string('Once');
            $table->string('Comments');
            $table->string('Commentsssss');
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
        Schema::dropIfExists('riviews');
    }
}

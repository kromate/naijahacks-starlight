<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quantity');
            $table->unsignedBigInteger('donation_id');
            $table->unsignedBigInteger('reciever_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('reciver_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('donation_id')->references('id')->on('donations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactons');
    }
}

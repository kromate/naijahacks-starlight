<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description', 1500);
            $table->string('type');
            $table->string('image', 1000)->nullable();
            $table->text('attachments')->nullable();
            $table->string('quantity');
            $table->string('location');
            $table->string('status');
            $table->unsignedBigInteger('donor_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('donor_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}

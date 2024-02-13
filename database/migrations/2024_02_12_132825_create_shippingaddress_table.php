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
        Schema::create('shippingaddress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->unique();
            $table->string('citymun');
            $table->string('szp');
            $table->string('housenumber');
            $table->string('landmark');
            $table->string('contact');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('shippingaddress');
    }
};

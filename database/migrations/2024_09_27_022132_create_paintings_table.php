<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paintings', function (Blueprint $table) {
            $table->id();
            $table->integer('genreID');
            $table->integer('artistID')->nullable();
            $table->string('artistName')->nullable();
            $table->string('paintingTitle')->nullable();
            $table->longText('paintingDescription');
            $table->string('paintingImage')->unique();
            $table->float('paintingPrice');
            $table->float('shippingCharge')->nullable();
            $table->smallInteger('paintingYear')->nullable();


//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paintings');
    }
};

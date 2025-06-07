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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('room_number');
            $table->enum('room_type' , ['Single' , 'Double' , 'Double Superior' , 'Suite']);
            $table->string('description');
            $table->boolean('offer');
            $table->float('price');
            $table->float('discount');
            $table->string('cancellation_policy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};

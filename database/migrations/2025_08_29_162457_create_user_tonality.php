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
        Schema::create('user_song_tonality', function (Blueprint $table) {
            
            $table->unsignedBigInteger('tonality_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('song_id');

            $table->primary(['user_id', 'song_id']);
            $table->foreign('tonality_id')->references('id')->on('tonalities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tonality_user');
    }
};
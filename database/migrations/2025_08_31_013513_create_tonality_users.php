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
        Schema::create('tonality_user', function (Blueprint $table) {
        
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('song_id');
        $table->unsignedBigInteger('tonality_id');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        $table->foreign('tonality_id')->references('id')->on('tonalities')->onDelete('cascade');
        $table->primary(['user_id', 'song_id']); // para que solo una preferencia por canción por usuario
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tonality_users');
    }
};
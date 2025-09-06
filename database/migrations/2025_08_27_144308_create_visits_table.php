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
        Schema::create('visits', function (Blueprint $table) {
            $table->id(); // crea un campo 'id' auto incremental
            $table->unsignedBigInteger('user_id'); // ID del usuario
            $table->string('visitable_type'); // tipo de contenido: 'cancion', 'cancionero', 'acorde'
            $table->unsignedBigInteger('visitable_id'); // ID del contenido visitado
            $table->timestamp('visited_date')->useCurrent(); 
            $table->timestamps();
         
           
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
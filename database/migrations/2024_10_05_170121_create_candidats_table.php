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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id(); 
            $table->string('nom'); 
            $table->string('prenom'); 
            $table->integer('note'); 
            $table->unsignedBigInteger('id_filiere'); // Clé étrangère
            
            // Déclaration de la clé étrangère
            $table->foreign('id_filiere')
                  ->references('id')
                  ->on('filieres') 
                  ->onDelete('cascade');  
            
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};

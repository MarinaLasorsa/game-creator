<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('character_weapon', function (Blueprint $table) {
            //creo le colonne
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');

            $table->unsignedBigInteger('weapon_id');
            $table->foreign('weapon_id')->references('id')->on('weapons')->onDelete('cascade');
            
            
            $table->unsignedInteger('quantity')->default(1);


            //creo i vincoli


            $table->primary(['character_id', 'weapon_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_weapon');
    }
};

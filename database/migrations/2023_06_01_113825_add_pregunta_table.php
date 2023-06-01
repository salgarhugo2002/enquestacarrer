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
        Schema::table('pregunta', function (Blueprint $table) {
            $table->unsignedBigInteger('enquestas_id');
 
            $table->foreign('enquestas_id')->references('id')->on('enquestas');
        });
    
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::create('process_professionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_id')
            ->nullable()
            ->references('id')
            ->on('processes');
            $table->foreignId('professional_id')
            ->nullable()
            ->references('id')
            ->on('professionals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_professionals');
    }
};

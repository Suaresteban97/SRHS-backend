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
        Schema::create('upzs', function (Blueprint $table) {
            $table->id();
            $table->integer("code");
            $table->string("name", 50);
            $table->string("latitude");
            $table->string("longitude");
            $table->foreignId('location_id')
            ->references('id')
            ->on('locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upzs');
    }
};

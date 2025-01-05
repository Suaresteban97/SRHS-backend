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
        Schema::create('process_follows', function (Blueprint $table) {
            $table->id();
            $table->foreignId("proccess_id")->nullable()->unsigned()->references("id")->on("processes");
            $table->foreignId("step_id")->nullable()->unsigned()->references("id")->on("steps");
            $table->foreignId("document_id")->nullable()->unsigned()->references("id")->on("documents");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_follows');
    }
};

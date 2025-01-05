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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string("document");
            $table->string("numeration");
            $table->string("date");
            $table->string("year");
            $table->foreignId('type_id')
            ->references('id')
            ->on('document_types');
            $table->foreignId('file_id')
            ->nullable()
            ->references('id')
            ->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

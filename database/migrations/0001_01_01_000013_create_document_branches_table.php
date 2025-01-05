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
        Schema::create('document_branches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')
            ->references('id')
            ->on('documents');
            $table->foreignId('branch_id')
            ->references('id')
            ->on('subdirection_user_branches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_branches');
    }
};

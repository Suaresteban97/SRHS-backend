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
        Schema::create('groups_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId("group_id")->nullable()->unsigned()->references("id")->on("groups");
            $table->foreignId("line_id")->nullable()->unsigned()->references("id")->on("group_lines");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups_lines');
    }
};

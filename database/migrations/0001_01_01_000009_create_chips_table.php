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
        Schema::create('chips', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("subdirection_user_branches_id")->nullable()->unsigned()->references("id")->on("subdirection_user_branches");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chips');
    }
};
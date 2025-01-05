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
        Schema::create('subdirection_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('nit');
            $table->string('address')->nullable();
            $table->foreignId("upz_id")->nullable()->unsigned()->references("id")->on("upzs");
            $table->foreignId("group_id")->nullable()->unsigned()->references("id")->on("groups");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subdirection_users');
    }
};

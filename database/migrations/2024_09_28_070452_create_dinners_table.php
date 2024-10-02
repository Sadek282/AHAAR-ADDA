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
        Schema::create('dinners', function (Blueprint $table) {
            $table->id();
            $table->string('foodPicture')->nullable();
            $table->string('foodName')->nullable();
            $table->string('foodPrice')->nullable();
            $table->string('foodDetails')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dinners');
    }
};

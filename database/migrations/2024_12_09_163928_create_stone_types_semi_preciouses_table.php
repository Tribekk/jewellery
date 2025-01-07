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
        Schema::create('stone_types_semi_preciouses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('uriName')->unique();
            $table->string('picture')->unique()->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stone_types_semi_preciouses');
    }
};

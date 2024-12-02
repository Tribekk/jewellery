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
        Schema::create('encyclopedias', function (Blueprint $table) {
            $table->id();
            $table->string('type_stone')->unique();
            $table->foreign('type_stone')->references('uriName')->on('type_stones')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('picture');
            $table->string('name');
            $table->text('dataDesktop');
            $table->text('dataMobile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encyclopedias');
    }
};

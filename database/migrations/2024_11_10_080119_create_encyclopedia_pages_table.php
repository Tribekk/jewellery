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
        Schema::create('encyclopedia_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_encyclopedia');
            $table->foreign('id_encyclopedia')->references('id')->on('encyclopedias')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->string('uriName')->unique();
            $table->text('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encyclopedia_pages');
    }
};

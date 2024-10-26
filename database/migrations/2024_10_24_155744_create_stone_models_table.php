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
        Schema::create('stone_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->float('mass');
            $table->text('color');
            $table->string('purity');
            $table->string('ennoblement');
            $table->string('сut');
            $table->float('height');
            $table->float('width');
            $table->float('length');
            $table->text('birth');
            $table->string('article')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stone_models');
    }
};

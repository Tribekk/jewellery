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
        Schema::table('stone_models', function (Blueprint $table){
            $table->foreign('cut')->references('uriName')->on('cut_stones')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('color_index')->references('uriName')->on('color_stones')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('type_index')->references('uriName')->on('type_stones')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

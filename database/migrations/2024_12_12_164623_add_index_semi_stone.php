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
        Schema::table('semi_precious_stones', function (Blueprint $table){
            $table->foreign('stone_type_index')->references('uriName')->on('stone_types_semi_preciouses')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('stone_category_index')->references('uriName')->on('semi_precious_stone_categories')->cascadeOnUpdate()->cascadeOnDelete();
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

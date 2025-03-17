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
        Schema::table('encyclopedias', function (Blueprint $table){
            $table->string("titleSEO");
            $table->string("descriptionSEO");
            $table->string("keyWordSEO");
        });
        Schema::table('encyclopedia_pages', function (Blueprint $table){
            $table->string("titleSEO");
            $table->string("descriptionSEO");
            $table->string("keyWordSEO");
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

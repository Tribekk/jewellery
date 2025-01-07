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
        Schema::create('jewelry_items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Название изделия
            $table->text('description'); // Описание
            $table->json('materials'); // Материалы (массив)
            $table->float('weight'); // Вес
            $table->string('article')->unique(); // Артикул
            $table->integer('price'); // Цена
            $table->boolean('visible')->default(true); // Признак видимости товара
            $table->json('media')->nullable(); // Мультимедиа (фото и видео)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewelry_items');
    }
};

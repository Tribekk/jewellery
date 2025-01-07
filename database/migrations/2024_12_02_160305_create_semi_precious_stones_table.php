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
        Schema::create('semi_precious_stones', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Название камня
            $table->text('description')->nullable(); // Описание
            $table->string('origin'); // Происхождение (например, страна или месторождение)
            $table->integer('price_per_kg'); // Цена за килограмм
            $table->boolean('visible')->default(true); // Признак видимости товара
            $table->string('article')->unique(); // Уникальный артикул
            $table->json('media')->nullable(); // Массив медиафайлов (фото и видео)
            $table->string('stone_type_index'); // Тип камня (например, оникс, янтарь и т.д.)
            $table->string('stone_category_index'); // Категория (например, необработанный, обработанный)
            $table->boolean('is_certified')->default(false); // Наличие сертификата
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semi_precious_stones');
    }
};

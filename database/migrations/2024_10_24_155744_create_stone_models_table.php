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
            $table->string('name')->unique(); // название
            $table->text('description'); // описание
            $table->float('mass'); // масса
            $table->text('color'); // цвет
            $table->string('purity'); // чистота
            $table->string('ennoblement'); // Облагораживание (например: термообработка)
            $table->string('cut'); // Огранка
            $table->float('height'); // |             высота
            $table->float('width'); //  |---> размеры ширина
            $table->float('length'); // |             длинна
            $table->text('birth'); // Происхождение
            $table->integer('price'); // Цена
            $table->boolean('visible')->default(true); // Признак видимости товара
            $table->string('article')->unique(); // Артикул
            $table->string('preview_photo'); // Главное фото
            $table->string('next_photo'); // Следующее фото todo возможно переделаю под массив фоток
            $table->string('color_index');
            $table->string('type_index');
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

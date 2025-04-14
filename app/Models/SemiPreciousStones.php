<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SemiPreciousStones extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'origin',
        'price_per_kg',
        'visible',
        'article',
        'media',
        'stone_type_index',
        'stone_category_index',
        'is_certified',
    ];

    protected $casts = [
        'media' => 'array', // Автоматическое преобразование JSON в массив и обратно
    ];

    public function typeBelongsTo(): BelongsTo{
        return $this->belongsTo(StoneTypesSemiPrecious::class, 'stone_type_index', 'uriName');
    }

    public function categoryBelongsTo(): BelongsTo{
        return $this->belongsTo(SemiPreciousStoneCategories::class, 'stone_category_index', 'uriName');
    }

    protected static function boot(): void
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->article)) {
                // Извлекаем первые 2 буквы типа камня
                $typeAbbreviation = substr($model->typeBelongsTo->uriName ?? '', 0, 2);
                // Берем количество карат и округляем его до 2-х знаков
                $mass = number_format($model->mass);
                // Используем id записи, если он доступен, или создаем временный идентификатор
                $id = $model->id ?? StoneModel::max('id') + 1;

                // Формируем артикул
                $model->article = strtoupper($typeAbbreviation) . '-' . $mass . '-' . $id;
            }
        });
    }
}

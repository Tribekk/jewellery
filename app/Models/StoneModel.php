<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StoneModel extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'name',
            'description',
            'mass',
            'color',
            'purity',
            'ennoblement',
            'cut',
            'height',
            'width',
            'length',
            'birth',
            'price',
            'visible',
            'article',
            'preview_photo',
            'next_photo',
            'color_index',
            'type_index',
        ];

    public function colorBelongsTo(): BelongsTo
    {
        return $this->belongsTo(ColorStone::class, 'color_index', 'uriName');
    }
    public function typeBelongsTo(): BelongsTo
    {
        return $this->belongsTo(TypeStone::class, 'type_index', 'uriName');
    }
    public function cutBelongsTo(): BelongsTo
    {
        return $this->belongsTo(CutStones::class, 'cut', 'uriName');
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

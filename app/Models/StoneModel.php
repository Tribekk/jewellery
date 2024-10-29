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
            'сut',
            'height',
            'width',
            'length',
            'birth',
            'price',
            'visible',
            'article',
            'preview_photo',
            'next_photo',
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
}

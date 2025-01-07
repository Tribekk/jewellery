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
      'media' => 'array' ,
    ];

    public function typeBelongsTo(): BelongsTo{
        return $this->belongsTo(StoneTypesSemiPrecious::class, 'stone_type_index', 'uriName');
    }

    public function categoryBelongsTo(): BelongsTo{
        return $this->belongsTo(SemiPreciousStoneCategories::class, 'stone_category_index', 'uriName');
    }
}

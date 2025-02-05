<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JewelryItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'materials',
        'weight',
        'article',
        'price',
        'visible',
        'media',
    ];
    protected $casts = [
        'media' => 'array',
        'materials' => 'array',
    ];

    public function materialsBelongsTo(): BelongsTo
    {
        return $this->belongsTo(JewellerMaterials::class, 'materials', 'uriName');
    }
}

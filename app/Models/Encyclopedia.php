<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Encyclopedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_stone',
        'picture',
        'name',
        'dataDesktop',
        'dataMobile',
        'titleSEO',
        'descriptionSEO',
        'keyWordSEO',
    ];

    public function typeStones() : BelongsTo {
        return $this->belongsTo(TypeStone::class, 'type_stone', 'uriName');
    }

    public function pages() :HasMany{
        return $this->hasMany(EncyclopediaPage::class, 'id_encyclopedia', 'id');
    }
}

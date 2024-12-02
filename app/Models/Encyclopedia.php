<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
    ];

    public function typeStones() :HasMany{
            return $this->hasMany(TypeStone::class, 'uriName', 'type_stone');
    }

    public function pages() :HasMany{
        return $this->hasMany(EncyclopediaPage::class, 'id_encyclopedia', 'id');
    }
}

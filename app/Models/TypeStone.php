<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class TypeStone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uriName',
        'picture',
        'description',
    ];

    public function stones(): HasMany
    {
        return $this->hasMany(StoneModel::class, 'type_index', 'uriName');
    }

    public function colors(): HasMany
    {
        return $this->hasMany(ColorStone::class, 'uriName', 'color_index');
    }
}

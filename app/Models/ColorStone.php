<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ColorStone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uriName',
        'picture',
        'description',
    ];

    public function stones() :HasMany
    {
        return $this->hasMany(StoneModel::class, 'color_index', 'uriName');
    }
}

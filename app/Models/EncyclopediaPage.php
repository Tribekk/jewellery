<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncyclopediaPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_encyclopedia',
        'name',
        'uriName',
        'data',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoneTypesSemiPrecious extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uriName',
        'picture',
        'description',
    ];

}

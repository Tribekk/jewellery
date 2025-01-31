<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    protected $casts =[
      'media' => 'array',
    ];
}

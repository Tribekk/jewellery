<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JewellerMaterials extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'uriName',
      'picture',
      'description',
    ];
}

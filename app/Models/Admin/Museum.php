<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name',
        'coordinates',
        'state',
        'image',
        'theme',
        'price',
        'ratings',
        'rooms',
    ];
}

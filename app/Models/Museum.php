<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Museum extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name',
        'slug',
        'coordinates',
        'state',
        'image',
        'theme',
        'price',
        'ratings',
        'rooms',
    ];

    public static function generateSlug($str){
        $slug = Str::slug($str, '-');
        $original_slug = $slug;
        $slug_exist = Museum::where('slug',$slug)->first();
        $c = 1;
        while($slug_exist){
            $slug = $original_slug . '-' . $c;
            $slug_exist = Museum::where('slug',$slug)->first();
            $c++;

        };

        return $slug;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Artist;

class Opera extends Model
{
    use HasFactory;

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public static function generateSlug($str){
        $slug = Str::slug($str, '-');
        $first_slug = $slug;
        $is_slug_used = Artist::where('slug', $slug)->first();
        $counter =  1;

        // While the slug is already in the database add an ascendent suffix using a counter
        while($is_slug_used){
            $slug = $first_slug . $counter;
            $is_slug_used = Artist::where('slug', $slug)->first();
            $counter++;
        }

        return $slug;
    }
}

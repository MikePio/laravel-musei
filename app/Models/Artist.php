<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Artist;
use App\Models\Opera;


class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "birth_date",
        "death_date",
        "works",
        "nationality",
        "genre",
        "photo"

    ];


    public function operas(){
        return $this->hasMany(Opera::class);
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

<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps=false;

    protected $fillable=['url','shortner'];

    public static function getUniqueShortUrl(){
        $shortner = Str::random(5);

        if(static::whereShortner($shortner)->count() >0) {
            return static::getUniqueShortUrl();
        }

        return $shortner;
        
    }

}

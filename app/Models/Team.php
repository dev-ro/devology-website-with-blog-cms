<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
     /**
     * setSlugAttribute function
     *
     * @param slug $value
     *
     */
    public function setSlugAttribute($value) { 
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }
}

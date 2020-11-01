<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Blogcategories extends Model
{
    use HasFactory;
    protected $fillable = [];


    /**
     * setSlugAttribute function
     *
     * @param slug $value
     *
     */
    public function setSlugAttribute($value) { 
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }


    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Blog\Database\Factories\BlogcategoryFactory::new();
    }


    public function blogs() {
        return $this->belongsToMany(Blog::class, 'blogcategories_blogs');
    }
    
}

<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
class Blog extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function setSlugAttribute($value) { 
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    protected static function  booted()
    {
        static::creating(function($blog) {
            if(static::whereSlug($blog->slug)->exists()) {
                self::updateSlug($blog->id);
            }
        });
    }


    protected static function updateSlug($slugid) {
        $blog = self::find($slugid);
        $blog->slug = $blog->slug.'-'.$slugid;
        $blog->save();
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Blog\Database\Factories\BlogFactory::new();
    }
}
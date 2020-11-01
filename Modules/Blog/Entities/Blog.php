<?php

namespace Modules\Blog\Entities;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [];

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
        return \Modules\Blog\Database\Factories\BlogFactory::new();
    }

    public function blogcategories() {
        return $this->belongsToMany(Blogcategories::class, 'blogcategories_blogs');
    }

    public static function boot() {
        parent::boot();
        // Get Results By ID in Descending order
        static::addGlobalScope('reverse' , function(Builder $builder){
            $builder->orderBy('id' , 'DESC');
        });
    }

}
<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Blogcategories extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'blogcategories';

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

    public static function updateBlogCategory($attributes , $id) {
        $blogcategory = self::findOrFail($id);

        $blogcategory->title = $attributes['blogcategory_title'];
        $blogcategory->excerpt = $attributes['blogcategory_excerpt'] ?? $blogcategory->excerpt;
        $blogcategory->image = $attributes['blogcategory_image'] ?? $blogcategory->image;
        $blogcategory->slug = $attributes['blogcategory_title'];
        
        return $blogcategory->save();
    }

    public static function storeBlogCategory($attributes) {
        return $blogcategory = self::create([
            'title' => $attributes['blogcategory_title'],
            'excerpt' => $attributes['blogcategory_excerpt'] ?? '',
            'image' => $attributes['blogcategory_image'] ?? '',
            'slug' => $attributes['blogcategory_title'],
        ]);
    }

    public function blogs() {
        return $this->belongsToMany(Blog::class, 'blogcategories_blogs');
    }
    

    public static function boot() {
        parent::boot();
        static::addGlobalScope('reverse' , function(Builder $builder){
            $builder->orderBy('id' , 'DESC');
        });
        // Delete Blogs when deleting category
        static::deleting(function($blogcategories){
            $blogcategories->blogs()->delete();
        });
    }

}

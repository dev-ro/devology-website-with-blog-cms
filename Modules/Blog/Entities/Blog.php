<?php

namespace Modules\Blog\Entities;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'blogs';

    // Validation Default Array
    public const VALIDATION = [
        'blog_title'     => 'required|min:3|max:100',
        'blog_excerpt'   => 'max:200',
        'blog_image'     => 'file|image|max:1024',
        'blog_description'     => 'required',
    ];


    /**
     * Slug
     *
     * @param string $value
     *
     * @return void
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



    /**
     * Update Blog By Id
     *
     * @param Array $attributes
     * @param Integer $id
     *
     * @return void
     */
    public static function updateBlog($attributes, $id) {
        $blog = self::find($id);

        $blog->title        = $attributes['blog_title'];
        $blog->excerpt      = $attributes['blog_excerpt'];
        $blog->description  = $attributes['blog_description'];
        $blog->ft_img       = isset($attributes['blog_image']) ? $attributes['blog_image'] : '';
        $blog->slug         = $attributes['blog_title'];

        return $blog->save();
    }

    /**
     * Store Blog
     *
     * @param Array|Object $attributes
     *
     * @return void
     */
    public static function storeblog($attributes) {
        $save = self::create([
            'title' => $attributes['blog_title'],
            'excerpt' => $attributes['blog_excerpt'],
            'description' => $attributes['blog_description'] ?? '',
            'ft_img' => isset($attributes['blog_image']) ? $attributes['blog_image'] : '',
            'slug' => $attributes['blog_title']
        ]);

        return $save;
    }
}
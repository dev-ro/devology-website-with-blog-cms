<?php

namespace Modules\Services\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Str;
class Service extends Model
{
    use HasFactory;
    protected $fillable = [];
    public $table = 'services';

    // Validation
    const VALIDATION = [
        'service_excerpt' => 'required|max:200',
        'service_description' =>'required',
        'service_image' => 'file|image|max:1024',
    ];

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
     * Update Service function
     *
     * @param Array $attributes
     * @param Int $id
     *
     * @return void
     */
    public static function updateService($attributes, $id) {
        $service = self::find($id);
        $service->name = $attributes['service_name'];
        $service->excerpt = $attributes['service_excerpt'];
        $service->keywords = $attributes['service_keywords'];
        $service->description = $attributes['service_description'];
        $service->image = $attributes['service_image'];
        $service->featured = $attributes['service_featured'];
        $service->show_footer_menu = $attributes['service_footer_menu_show'];
        $service->slug = $attributes['service_name'];
        return $service->save();
    }


    /**
     * Store into Database
     *
     * @param Array $attributes
     * @param Int $id
     *
     * @return void
     */
    public static function storeService($attributes) {
        return self::create([
            'name' => $attributes['service_name'],
            'excerpt' => $attributes['service_excerpt'],
            'keywords' => $attributes['service_keywords'],
            'description' => $attributes['service_description'],
            'image' => $attributes['service_image'],
            'featured' => $attributes['service_featured'],
            'show_footer_menu' => $attributes['service_footer_menu_show'],
            'slug' => $attributes['service_name']
        ]);
    }


    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Services\Database\Factories\ServiceFactory::new();
    }

}

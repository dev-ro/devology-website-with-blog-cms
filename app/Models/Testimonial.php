<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    // Model name
    protected $table = 'testimonials';

    use HasFactory;
    protected $guarded = [];

    // Validation
    const Validation = [
        'testimonial_name'          => 'required|min:2|max:30',
        'testimonial_designation'   => 'required|min:3|max:100',
        'testimonial_image'         => 'file|image|max:1024',
        'testimonial_desc'          => 'required',
    ];



    public static function updateTestimonial(array $attributes, int $id) {

        $testimonial = self::find($id);

        $testimonial->name          = $attributes['testimonial_name'];
        $testimonial->company       = $attributes['testimonial_designation'];
        $testimonial->description   = $attributes['testimonial_desc'];
        $testimonial->image         = $attributes['testimonial_image'] ?? $testimonial->image;

        return $testimonial->save();

    }
}

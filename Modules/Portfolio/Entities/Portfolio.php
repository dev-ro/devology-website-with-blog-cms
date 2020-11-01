<?php

namespace Modules\Portfolio\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [];


    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Portfolio\Database\Factories\PortfolioFactory::new();
    }



    /**
     * setSlugAttribute function
     *
     * @param slug $value
     *
     */
    public function setSlugAttribute($value) { 
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }


    public function singleLink() {
        return route('single-portfolio-show' , $this->slug);
    }

    public static function boot() {
        parent::boot();
        // Get Results By ID in Descending order
        static::addGlobalScope('reverse' , function(Builder $builder){
            $builder->orderBy('id' , 'DESC');
        });
    }

}

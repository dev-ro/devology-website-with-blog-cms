<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $table = 'teams';

    public const VALIDATION = [
        'team_name' => 'required|min:2',
        'team_designation' => 'required'
    ];

    public static function updateTeam($attributes, $id) {
        $team = self::findOrFail($id);

        $team->team_name = $attributes['team_name'];
        $team->designation = $attributes['team_designation'];
        $team->image = isset($attributes['team_image']) ? $attributes['team_image'] : $team->image;
        $team->description = $attributes['team_description'];
        $team->slug = $attributes['team_name'];

        return $team->save();
    }

    public static function storeTeam($attributes) {
        return self::create([
            'team_name' => $attributes['team_name'],
            'designation' => $attributes['team_designation'],
            'image' => isset($attributes['team_image']) ? $attributes['team_image'] : '',
            'description' => $attributes['team_description'],
            'slug' => $attributes['team_name'],
        ]);
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
}

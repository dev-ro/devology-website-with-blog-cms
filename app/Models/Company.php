<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Company extends Model
{

    /**
     * fixed Company id
     *
     * @var integer
     */
    protected static $id = 1;

    public const VALIDATION = [
        'company_name'      => 'required|string|max:80',
        'company_logo_header'   => 'file|image|max:1024',
        'company_logo_footer'   => 'file|image|max:1024',
        'company_favicon'   => 'file|image|max:300',
        'company_social'    => 'json'
    ];

    use HasFactory;

    protected $casts = [
        'company_social' => 'json'
    ];


    /**
     * Update Company Settings
     * fixed id = 1
     */
    public static function updateSetting(array $attributes = [], array $options = [])
    {

        $company_settings =  self::find(self::$id);
        $company_settings->company_name         = $attributes['company_name'];
        $company_settings->tagline              = $attributes['company_tagline'];

        // Logo and Favicon
        $company_settings->company_logo_header  = $attributes['company_logo_header'] ?? $company_settings->company_logo_header;
        $company_settings->company_logo_footer  = $attributes['company_logo_footer'] ?? $company_settings->company_logo_footer;
        $company_settings->company_favicon      = $attributes['company_favicon'] ?? $company_settings->company_favicon;
        
        $company_settings->company_social       = json_decode($attributes['company_social']) ?? $attributes['company_social'];
        $company_settings->company_description  = $attributes['company_address'];
        $company_settings->company_email        = $attributes['company_email'];
        $company_settings->company_contact      = $attributes['company_contact'];
        $company_settings->company_address      = $attributes['company_address'];
        $company_settings->copyright            = $attributes['copyright'];
        
        return $company_settings->save();
    }
    

}

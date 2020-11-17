<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class UploadController extends Controller
{


    protected static $dir = '/uploads/';

    /**
     * Upload Please function
     *
     * @param string $dir
     * @param mixed $file
     * @param mixed $attr
     *
     * @return uploaded file name with dir
     */
    public static function uploadPlease(string $file, string $dir='', array $attr=[] ){
        $file = Storage::disk('public')->putFile(self::$dir.$dir, $file);
        return '/storage/'.$file;
    }


    public static function removeImage($file) {
        return Storage::disk('public')->delete($file);
    }
}

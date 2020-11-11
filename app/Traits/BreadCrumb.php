<?php

namespace App\Traits;

use Illuminate\Support\Facades\Request;

trait BreadCrumb
{
    
    /**
     * Simple BreadCrumb function
     *
     * @param string $url
     *
     * @return array or object
     * 
     * Return Structured breadcrumb based upon the url given 
     * 
     * $url = website.com/admin/dashboard
     */
    public  function breadCrumbStructure() {
        $url = Request::url();
        $newBreadCrumbUrl = [];
        $urlDeform = explode("/" , $url);
        for ($i=4; $i < count($urlDeform) ; $i++) { 
            $newBreadCrumbUrl[] = ucfirst(str_replace('-' , ' ' , $urlDeform[$i])); 
        }
        return $newBreadCrumbUrl = [
            'page_title' => $newBreadCrumbUrl[array_key_last($newBreadCrumbUrl)],
            'breadcrumbs' => $newBreadCrumbUrl
        ];
    } 

}

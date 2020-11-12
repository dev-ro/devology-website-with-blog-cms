<?php 

namespace Modules\Admin\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller 
{
    

    /**
     *  findOrFailById function
     * Find if id is valid or fail
     * @param integer $id
     *
     * @return void
     */
    protected function findOrFailById($table , $id) {
        $initiated = DB::table($table)->find($id);
        return $initiated;
    }

    /**
     * Delete By Id
     * 
     */
    protected function deleteById($table , $id) {
        if(DB::table($table)->delete($id)) {
            return true;
        }
        return false;
    }

}
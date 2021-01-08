<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected $module_name;
    protected $model;
    public function index($module_name){

        try{
            $this->setModuleName($module_name);
            $this->initModel();
        }catch(Exception $e){
            dd($e);
        }

    }
    protected function setMouleName($module_name){
        $this->module_name = $module_name;
    }
    protected function initModel(){

    }
}

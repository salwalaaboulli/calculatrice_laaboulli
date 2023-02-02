<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcFactory extends Controller
{
    /**
     * Static function to build calc objects
     *
     * @param string $type
     * @return CalcI|void
     */
    public static function build ($type = 'add') 
    {
        if ($type != '') {
            $className = 'App\\Http\\Controllers\\Calc'.ucfirst($type);
            if (class_exists($className)) {
                return new $className();
            } 
        }
    }
}

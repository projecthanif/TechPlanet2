<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class ViewHelper
{

    public static function getMainRouteName(): string
    {
        $routeName = Route::currentRouteName();

        $arr = explode('.', $routeName);
        if (count($arr) > 1) {
            $routeName = $arr[0];
        }

        return $routeName;
    }

}

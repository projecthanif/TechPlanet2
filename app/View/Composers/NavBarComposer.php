<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Helpers\ViewHelper;

class NavBarComposer
{
    public function compose(View $view)
    {
        return $view->with([
            'route' => ViewHelper::getMainRouteName()
        ]);
    }
}

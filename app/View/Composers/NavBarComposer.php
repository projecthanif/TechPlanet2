<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class NavBarComposer
{
    public function compose(View $view)
    {
        return $view->with([
            'route' => $this->getRouteName()
        ]);
    }

    private function getRouteName(): string
    {

        $routeName = Route::currentRouteName();

        $arr = explode('.', $routeName);
        if (count($arr) > 1) {
            $routeName = $arr[0];
        }

        return $routeName;
    }
}

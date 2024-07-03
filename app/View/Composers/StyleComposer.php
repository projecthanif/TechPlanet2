<?php

namespace App\View\Composers;


use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class StyleComposer
{

    public function compose(View $view)
    {
        $link = $this->links();

        $banner = $this->hasBanner();

        $view->with([
            'link' => $link,
            'banner' => $banner
        ]);
    }

    private function links(): string
    {
        $routeName = $this->getRouteName();

        $link = match ($routeName) {
            'about' => 'about',
            'blog' => 'blog',
            'shop' => 'shop',
            'cart' => 'cart',
            'checkout' => 'checkout',
            'contact' => 'contact',
            'product' => 'product',
            default => 'style'

        };

        return "assets/css/{$link}.css";
    }

    private function hasBanner(): string
    {
        $routeName = $this->getRouteName();

        if ($routeName === 'index') {
            return '';
        }
        return "assets/css/jumbo.css";
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

<?php

namespace App\View\Composers;


use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class StyleComposer
{

    public function compose(View $view)
    {
        $link = $this->links();
        $view->with([
            'link' => $link
        ]);
    }

    private function links(): string
    {
        $routeName = Route::currentRouteName();

        $arr = explode('.', $routeName);
        if (count($arr) > 1) {
            $routeName = $arr[0];
        }

        $link = match ($routeName) {
            'index', => 'style',
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
}

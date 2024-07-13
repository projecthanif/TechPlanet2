<?php

namespace App\View\Composers;

use App\Helpers\ViewHelper;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class StyleComposer
{
    public function compose(View $view): void
    {
        $link = $this->links();

        $banner = $this->hasBanner();

        $view->with([
            'link' => $link,
            'banner' => $banner,
        ]);
    }

    private function links(): string
    {
        $routeName = ViewHelper::getMainRouteName();

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
        $routeName = ViewHelper::getMainRouteName();

        if ($routeName === 'index') {
            return '';
        }

        return 'assets/css/jumbo.css';
    }


}

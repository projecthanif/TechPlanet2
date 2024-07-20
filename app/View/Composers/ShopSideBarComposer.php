<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

class ShopSideBarComposer
{
    public function compose(View $view): void
    {
        $view->with([
            'categories' => $this->categories(),
            'parameter' => $this->getRequestedParameters()
        ]);
    }

    private function categories()
    {
        return Category::all();
    }

    private function getRequestedParameters()
    {
        $parameter = Request::route()?->parameters();
        return $parameter['category'] ?? null;
    }

}

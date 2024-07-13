<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ShopCategory extends Component
{

    use WithPagination;

    public function render()
    {

        $id = $this->getCategoryId();
        $products = Product::where('category_id', $id)->paginate(10);
        return view('livewire.shop-category',[
            'products' => $products
        ]);
    }

    private function getCategoryId(): ?int
    {
        $category = Request::route()?->parameters()['category'];
        return Category::where('name', $category)->get('id')?->first()->id;
    }
}

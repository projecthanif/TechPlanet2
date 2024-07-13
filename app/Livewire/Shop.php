<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;
    public function render()
    {
        $product = Product::paginate(10);
        return view('livewire.shop', [
            'products' => $product
        ]);
    }
}

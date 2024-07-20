<?php

namespace App\Livewire;

use App\Actions\Order\StoreOrderAction;
use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;

    public function order(int|string $id)
    {
        $product = Product::find($id);
        $store = new StoreOrderAction();
        $store->addOrder($product);
    }
    public function render()
    {
        $product = Product::paginate(12);
        return view('livewire.shop', [
            'products' => $product
        ]);
    }
}

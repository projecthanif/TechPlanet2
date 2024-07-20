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
        $id = Cart::where([
            'session_id' => session()->id()
        ])->get('id')->first()?->id;


        if ($id === null) {
            $session = Cart::create([
                'session_id' => session()->id()
            ]);

            $id = $session->id;
        }

        dd($id);

        $product = Product::paginate(12);
        return view('livewire.shop', [
            'products' => $product
        ]);
    }
}

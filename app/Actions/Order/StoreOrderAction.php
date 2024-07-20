<?php

namespace App\Actions\Order;

use App\Models\Cart;
use App\Models\Product;

class StoreOrderAction
{
    public function addOrder(Product $product)
    {
    }

    public function guest(int $productId)
    {
        $id = Cart::where([
            'session_id' => session()->id()
        ])->get('id')->first()->id;


        if ($id === null) {
            $session = Cart::create([
                'session_id' => session()->id()
            ]);

            $id = $session->id;
        }

        dd($id);

    }

    public function authUser()
    {

    }
}

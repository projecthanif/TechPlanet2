<?php

namespace App\Actions\Order;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;

class StoreOrderAction
{
    public function addOrder(Product $product)
    {
        $this->guest($product);
    }

    private function guest(Product $product)
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

        $quantity = 1;

        $cart = CartItem::create([
            'cart_id' => $id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price * $quantity
        ]);

//        dump($cart);

    }

    private function authUser()
    {

    }
}

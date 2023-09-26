<?php


namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class TotalQuantity extends Component
{
    public $totalQuantity;

    public function __construct()
    {
        $user = auth()->user();
        $totalQuantity = 0;

        if ($user) {
            $cart = $user->cart;

            if ($cart) {
                $cartProducts = $cart->cartProducts;

                foreach ($cartProducts as $cartProduct) {
                    $totalQuantity += $cartProduct->quantity;
                }
            }
        }

        $this->totalQuantity = $totalQuantity;
    }

    public function render()
    {
        return view('components.total-quantity');
    }
}

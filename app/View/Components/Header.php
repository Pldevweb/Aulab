<?php

namespace App\View\Components;

use Closure;
use App\Models\Cart;
use App\Models\CartProduct;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $cartProducts = CartProduct::all();
        $carts = Cart::all();
        return view('components.header', compact('cartProducts', 'carts'));
    }
}

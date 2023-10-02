<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Assuming you have authenticated users, you can get the user
    $user = Auth::user();

// Retrieve the user's cart with associated products
$cart = Cart::with('cartProducts.product')->where('user_id', $user->id)->first();

// Assuming you have loaded the cart products into $cart->cartProducts relationship

// Pass the cart products to the view
$cartProducts = $cart ? $cart->cartProducts : collect();

return view('cart', compact('cartProducts'));

}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Assuming you have authenticated users, you can get the user
        $user = Auth::user();

        // Check if the user already has a cart
        $existingCart = Cart::where('user_id', $user->id)->first();

        if (!$existingCart) {
            // If the user doesn't have a cart, create a new one
            $cart = new Cart();
            $cart->user_id = $user->id; // Set the user ID
            $cart->save();
        } else {
            // If the user already has a cart, use the existing one
            $cart = $existingCart;
        }

        // Retrieve the product details from the request
        $productId = $request->input('product_id');
        $quantity = 1; // You can adjust this based on user input

        // Check if the product already exists in the cart
        $existingCartProduct = CartProduct::where('cart_id', $cart->id)
            ->where('product_id', $productId)
            ->first();

        if ($existingCartProduct) {
            // If the product exists in the cart, increment the quantity
            $existingCartProduct->increment('quantity', $quantity);
        } else {
            // If the product doesn't exist in the cart, create a new cart product record
            $product = Product::find($productId);

            if ($product) {
                // Create a cart product record
                $cartProduct = new CartProduct();
                $cartProduct->product_id = $product->id;
                $cartProduct->quantity = $quantity;
                $cartProduct->cart_id = $cart->id; // Associate the cart with the cart product
                $cartProduct->save();
            }
        }

        // Redirect the user to the cart page or provide feedback.
        return redirect()->route('cart.index')->with('success', 'Produit ajouté à votre panier !');
    }

    public function updateQuantity(Request $request, $productId) {

        // Update the quantity in the database

        $cartProduct = CartProduct::find($productId);
        if (!$cartProduct) {
            return response()->json(['success' => false]);
        }

        $cartProduct->quantity = $request->input('quantity');
        $cartProduct->save();

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

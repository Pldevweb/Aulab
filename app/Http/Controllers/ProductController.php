<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('categorie')->get();
        $categories = Categorie::all();
        return view('produits-pour-chiens', compact('categories', 'products'));
    }

    public function showProductsByCategorie($slug)
    {
        $categorieModel = Categorie::where('slug', $slug)->firstOrFail();
        $categories = Categorie::all();

        foreach ($categories as $categorie) {
            $categorie->isActive = $categorie->slug === $slug;
        }

        $products = $categorieModel->products;
        return view('ProductsByCategorie', compact('products', 'categorieModel', 'categories'));
    }
    public function showProductDetails($categorie, $name)
{

    $product = Product::where('name', $name)->first();

    if (!$product) {
        abort(404);
    }

    $categorie = Categorie::where('slug', $categorie)->first();

    return view('productDetails', compact('product', 'categorie'));
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
        //
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

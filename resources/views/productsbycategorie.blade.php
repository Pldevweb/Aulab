@extends('layouts.app')

@section('content')
    <div class="p-4 w-full">
        <h1 class="text-2xl font-semibold mb-4 text-main-color">{{ $categorieModel->name }}</h1>
        <div class="flex flex-row flex-wrap justify-center items-stretch lg:flex-nowrap gap-2">
            <a href="/produits-pour-chiens" class="grow">
                <div class="text-main-color w-full rounded-lg shadow-md p-2 text-xs text-center notactive">
                    {{ __('messages.Voir_tous_les_produits') }} ({{ $totalProductsCount }})
                </div>
            </a>
            @foreach ($categories as $categorie)
                <a href="{{ route('productsbycategorie', $categorie->slug) }}" class="grow">
                    <div
                        class="text-main-color w-full rounded-lg shadow-md p-2 text-xs text-center {{ $categorie->isActive ? 'active' : 'notactive' }}">
                        {{ $categorie->name }} ({{ $categorie->products->count() }})
                    </div>
                </a>
            @endforeach
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-5">
            @foreach ($categorieModel->products as $product)
                <div class="flex items-stretch">
                    <div>
                        @if ($product->categorie->contains('id', 7))
                            <div class="relative top-5 right-5 h-0 flex flex-row justify-end items-center gap-2 text-xs text-main-color">
                                <i class="fa-solid fa-star text-yellow-500 text-med"></i> Produit favori !
                            </div>
                        @endif
                        <div class="w-full bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                            <h2 class="text-xl font-semibold mb-2 text-main-color">{{ $product->name }}</h2>
                            <div>
                                <p class="text-lg mt-2 text-main-color font-bold">{{ $product->price }} $</p>
                                <p class="text-sm text-main-color">Rabais {{ $product->discount }}%</p>
                            </div>
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="mt-4 mb-4 w-full h-96 object-contain"/>
                            @foreach ($product->categorie as $category)
                                <a class="p-3 inline-block w-full text-center bg-button hover:bg-[#727262] text-white"
                                    href="{{ route('productDetails', ['categorie' => $category->slug, 'name' => $product->name]) }}">Voir
                                    les détails
                                </a>
                            @break
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

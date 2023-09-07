@extends('layouts.app')

@section('content')
    <div class="p-4 w-full">
        <h1 class="text-2xl font-semibold mb-4 text-main-color">Liste de produits</h1>
        <div class="flex flex-row">
            <a href="/products" class="m-1 basis-1/4">
                <div class="text-main-color w-full rounded-lg shadow-md p-2 mb-3 text-xs text-center active">
                    {{ __('messages.Voir_tous_les_produits') }}
                </div>
            </a>
            @foreach ($categories as $categorie)
            <a href="{{ route('productsbycategorie', $categorie->slug) }}" class="m-1 basis-1/4">
                <div class="text-main-color w-full rounded-lg shadow-md p-2 mb-3 text-xs text-center notactive">
                    {{ $categorie->name }}
                </div>
            </a>
            @endforeach
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <div class="bg-card rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-2 text-main-color">{{ $product->name }}</h2>
                    <p class="text-main-color">{{ $product->description }}</p>
                    <p class="text-lg mt-2 text-main-color font-bold">{{ $product->price }} $</p>
                    <p class="text-sm text-main-color">Rabais {{ $product->discount }}%</p>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="mt-4 w-full h-48 object-cover">
                </div>
            @endforeach
        </div>
    </div>
@endsection

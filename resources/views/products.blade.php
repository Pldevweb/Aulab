@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-semibold mb-4 text-[#5e5e4a]">Liste de produits</h1>
        <div class="flex flex-row">
            <div class="bg-[#ededed] text-[#5e5e4a] w-full rounded-lg shadow-md p-2 m-1 mb-3 text-sm text-center">
                <a href="/products">{{ __('messages.Voir_tous_les_produits') }}</a>
            </div>
            @foreach ($categories as $categorie)
                <div class="bg-[#ededed] text-[#5e5e4a] w-full rounded-lg shadow-md p-2 m-1 mb-3 text-sm text-center">
                    <a href="{{ route('productsbycategorie', $categorie->slug) }}">{{ $categorie->name }}</a>
                </div>
            @endforeach
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <div class="bg-[#f8f8f8] rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-2 text-[#5e5e4a]">{{ $product->name }}</h2>
                    <p class="text-[#5e5e4a]">{{ $product->description }}</p>
                    <p class="text-lg mt-2 text-[#5e5e4a] font-bold">{{ $product->price }} $</p>
                    <p class="text-sm text-[#5e5e4a]">Rabais {{ $product->discount }}%</p>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="mt-4 w-full h-48 object-cover">
                </div>
            @endforeach
        </div>
    </div>
@endsection

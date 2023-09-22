@extends('layouts.app')

@section('content')
    <div class="p-4 w-full">
        <h1 class="text-2xl font-semibold mb-4 text-main-color">Liste de produits</h1>
        <div class="flex flex-row flex-wrap justify-center items-stretch lg:flex-nowrap gap-2">
            <a href="/produits-pour-chiens" class="grow">
                <div class="text-main-color w-full rounded-lg shadow-md p-2 text-xs text-center active">
                    {{ __('messages.Voir_tous_les_produits') }} ({{ $totalProductsCount }})
                </div>
            </a>
            @foreach ($categories as $categorie)
                <a href="{{ route('productsbycategorie', $categorie->slug) }}" class="grow">
                    <div class="text-main-color w-full rounded-lg shadow-md p-2 text-xs text-center notactive">
                        {{ $categorie->name }} ({{ $categorie->products->count() }})
                    </div>
                </a>
            @endforeach
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-5">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-2 text-main-color">{{ $product->name }}</h2>
                    <p class="text-main-color">
                        {{ substr($product->description, 0, 100) }}{{ strlen($product->description) > 100 ? '...' : '' }}
                    </p>
                    <p class="text-lg mt-2 text-main-color font-bold">{{ $product->price }} $</p>
                    <p class="text-sm text-main-color">Rabais {{ $product->discount }}%</p>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="mt-4 mb-4 w-full h-96 object-contain">
                    @foreach ($product->categorie as $category)
                        <a class="p-3 inline-block w-full text-center bg-button hover:bg-[#727262] text-white"
                            href="{{ route('productDetails', ['categorie' => $category->slug, 'name' => $product->name]) }}">Voir
                            les détails
                        </a>
                    @break
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection

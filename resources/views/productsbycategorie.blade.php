@extends('layouts.app')

@section('content')
    <div class="p-4 w-full">
        <h1 class="text-2xl font-semibold mb-4 text-main-color">{{ $categorieModel->name }}</h1>
        <div class="flex flex-row">
            <a href="/produits-pour-chiens" class="m-1 basis-1/4">
                <div class="text-main-color w-full rounded-lg shadow-md p-2 mb-3 text-xs text-center notactive">
                    {{ __('messages.Voir_tous_les_produits') }}
                </div>
            </a>
            @foreach ($categories as $categorie)
                <a href="{{ route('productsbycategorie', $categorie->slug) }}" class="m-1 basis-1/4">
                    <div
                        class="text-main-color w-full rounded-lg shadow-md p-2 mb-3 text-xs text-center {{ $categorie->isActive ? 'active' : 'notactive' }}">
                        {{ $categorie->name }}
                    </div>
                </a>
            @endforeach
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($categorieModel->products as $product)
                <div class="bg-card rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-2 text-main-color">{{ $product->name }}</h2>
                    <p class="text-main-color">
                        {{ substr($product->description, 0, 100) }}{{ strlen($product->description) > 100 ? '...' : '' }}
                    </p>
                    <p class="text-lg mt-2 text-main-color font-bold">{{ $product->price }} $</p>
                    <p class="text-sm text-main-color">Rabais {{ $product->discount }}%</p>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="mt-4 mb-4 object-cover">
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

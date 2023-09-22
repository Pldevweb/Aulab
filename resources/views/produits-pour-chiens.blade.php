@extends('layouts.app')

@section('content')
    <div class="p-4 w-full">
        <h1 class="text-2xl font-semibold mb-4 text-main-color">Liste de produits</h1>
        <div class="flex flex-row">
            <a href="/produits-pour-chiens" class="m-1 basis-1/4">
                <div class="text-main-color w-full rounded-lg shadow-md p-2 mb-3 text-xs text-center active">
                    {{ __('messages.Voir_tous_les_produits') }} ({{ $totalProductsCount }})
                </div>
            </a>
            @foreach ($categories as $categorie)
                <a href="{{ route('productsbycategorie', $categorie->slug) }}" class="m-1 basis-1/4">
                    <div class="text-main-color w-full rounded-lg shadow-md p-2 mb-3 text-xs text-center notactive">
                        {{ $categorie->name }} ({{ $categorie->products->count() }})
                    </div>
                </a>
            @endforeach

        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md p-6 flex flex-col justify-between">
                    <div>
                        <h2 class="text-xl font-semibold mb-2 text-main-color">{{ $product->name }}</h2>
                        <p class="text-main-color ">
                            {{ $product->description }}
                        </p>
                        @php
                            $originalPrice = $product->price;
                            $rebatePercentage = $product->discount;
                            $discountedPrice = $originalPrice - ($originalPrice * $rebatePercentage) / 100;
                        @endphp
                        <p class="text-lg mt-2 text-main-color font-bold">
                            {{ number_format($discountedPrice, 2) }} $
                            @if ($rebatePercentage > 0)
                                <span class="text-sm  text-red-500 line-through">{{ number_format($originalPrice, 2) }}
                                    $</span>

                        </p>
                        <p><span class="text-sm  p-1 border-2 border-orange-300 rounded"><strong>Rabais de
                                    {{ $product->discount }} %</strong></span></p>
            @endif
        </div>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
            class="mt-4 mb-4 h-96 mx-auto object-contain">
        @if ($product->categorie->isEmpty())
            <a class="p-3 text-center bg-button hover:bg-[#727262] text-white"
                href="{{ route('productDetails', ['categorie' => '-', 'name' => $product->name]) }}">Voir les
                détails</a>
        @else
            @foreach ($product->categorie as $category)
                <a class="p-3 text-center bg-button hover:bg-[#727262] text-white"
                    href="{{ route('productDetails', ['categorie' => $category->slug, 'name' => $product->name]) }}">Voir
                    les détails</a>
            @break
        @endforeach
    @endif
</div>
@endforeach
</div>
</div>
@endsection

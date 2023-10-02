@extends('layouts.app')

@section('content')
    <div class="p-4 w-full ">
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <h1 class="text-2xl font-semibold mb-4 text-main-color">{{ $product->name }}</h1>
            <div class="lg:grid lg:grid-cols-2 lg:justify-center lg:p-10">
                <div class="flex justify-center">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="w-96 max-h-96 object-contain"/>
                    @if ($product->favorite == 1)
                        <span class="flex flex-col text-xs text-main-color"><i class="fa-solid fa-star text-yellow-500 text-lg"></i> Produit favori !</span>
                    @endif
                </div>
                <div>
                    <p class="text-main-color text-justify">
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
                            <span class="text-sm text-red-500 line-through">{{ number_format($originalPrice, 2) }} $</span>

                    </p>
                    <p class="mt-2">
                        <span class="text-sm p-2 border-2 border-orange-300 rounded">
                            <strong>
                                Rabais de {{ $product->discount }} %
                            </strong>
                        </span>
                    </p>
                    @endif
                </div>
            </div>
            <form method="POST" action="{{ route('cart.store') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="p-3 mt-3 text-right bg-button hover:bg-[#727262] text-white">
                    Ajouter au panier
                </button>
            </form>
        </div>
    @endsection

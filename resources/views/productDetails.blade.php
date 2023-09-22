@extends('layouts.app')

@section('content')
    <div class="p-4 w-full">
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <h1 class="text-2xl font-semibold mb-4 text-main-color">{{ $product->name }}</h1>
            <p class="text-main-color">{{ $product->description }}</p>
            <p class="text-lg mt-2 text-main-color font-bold">{{ $product->price }} $</p>
            <p class="text-sm text-main-color">Rabais {{ $product->discount }}%</p>
            <div class="mt-4 flex justify-center items-center"> <!-- Use flex to center the image -->
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-[48rem] h-[48rem] object-fit">
            </div>
            <button class="p-3 mt-3 text-right bg-button hover:bg-[#727262] text-white">Ajouter au panier</button>
        </div>
    </div>
@endsection

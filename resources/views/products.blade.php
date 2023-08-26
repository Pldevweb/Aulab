@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-semibold mb-4">Liste de produits</h1>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                    <p class="text-gray-600">{{ $product->description }}</p>
                    <p class="text-lg mt-2">Prix {{ $product->price }} $</p>
                    <p class="text-sm text-gray-500">Rabais {{ $product->discount }}%</p>
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="mt-4 w-full h-48 object-cover">
                </div>
            @endforeach
        </div>
    </div>
@endsection

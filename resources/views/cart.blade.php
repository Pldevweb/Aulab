@extends('layouts.app')

@section('content')
    <div class="p-4 w-full ">
        <div class="bg-white min-h-screen rounded-lg shadow-md p-6 text-center">
            <div class="container mx-auto px-4 py-8">
                <div x-data="{ showAlert: @json(Session::has('success')) }">
                    @if (Session::has('success'))
                        <div x-show="showAlert" x-transition:leave="transition-opacity ease-in duration-3000"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-init="setTimeout(() => showAlert = false, 6000)"
                            class="bg-button hover:bg-[#727262] text-white flex items-center rounded relative mb-4"
                            role="alert">
                            <strong class="font-bold flex-grow text-center text-xl">{{ Session::get('success') }}</strong>
                            <button @click="showAlert = false" type="button" class="close mr-2"><strong>X</strong></button>
                        </div>
                    @endif
                </div>
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <h1 class="text-2xl font-bold my-4">Panier d'achat</h1>
                    <a href="{{ route('checkout.index') }}"
                        class="bg-button hover:bg-[#727262] text-white font-bold py-3 px-4 rounded">
                        Passer la commande
                    </a>
                </div>
                <div class="mt-8">
                    @if (count($cartProducts) > 0)
                        @php
                            $prixTotal = 0;
                        @endphp

                        @foreach ($cartProducts as $cartProduct)
                            <div class="flex flex-col md:flex-row border-b border-gray-400 py-4">
                                <div class="flex-shrink-0">
                                    <img src="{{ 'storage/' . $cartProduct->product->image }}" alt="Image du produit"
                                        class="w-48 h-48 object-contain">
                                </div>
                                <div class="mt-4 md:mt-0 md:ml-6">
                                    <h2 class="text-lg font-bold">{{ $cartProduct->product->name }}</h2>
                                    <p class="mt-2 text-gray-600">{{ $cartProduct->product->description }}</p>
                                    </form>
                                    <div class="mt-4 flex items-center">
                                        <div class="flex items-center">
                                            <button class="bg-gray-200 rounded-l-lg px-2 py-1 decrement-quantity"
                                                data-id="{{ $cartProduct->id }}">-</button>
                                            <span class="mx-2 text-gray-600">
                                                <input type="number" id="quantity{{ $cartProduct->id }}" name="quantity"
                                                    disabled min="1" value="{{ $cartProduct->quantity }}"
                                                    data-price="{{ $cartProduct->product->price }}"
                                                    data-id="{{ $cartProduct->id }}"data-quantity="{{ $cartProduct->quantity }}"
                                                    class="w-16 py-1 px-2 rounded border quantity-input">
                                            </span>
                                            <button class="bg-gray-200 rounded-r-lg px-2 py-1 increment-quantity"
                                                data-id="{{ $cartProduct->id }}">+</button>
                                            <form method="POST" action="{{ route('cart.destroy', $cartProduct->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-button hover:bg-[#727262] text-white rounded ml-3 px-2 py-1">Supprimer</button>
                                        </div>
                                        <div class="ml-4">
                                            <span class="ml-auto font-bold">{{ $cartProduct->product->price }}$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $prixTotal += $cartProduct->quantity * $cartProduct->product->price;
                            @endphp
                        @endforeach
                    @else
                        <p>Votre panier est vide.</p>
                    @endif
                </div>
                @if (count($cartProducts) > 0)
                    <div class="flex justify-end items-center mt-8">
                        <span class="text-gray-600 mr-4">Sous-total :</span>
                        <span id="total-price" class="text-xl font-bold">{{ number_format($prixTotal, 2) }} $</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

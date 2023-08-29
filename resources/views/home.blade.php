@extends('layouts.app')

@section('content')
    <div class="flex items-center bg-white flex-col w-4/6 m-3">
        <section class="w-5/6 h-5/6 mt-4 bg-cover bg-center bg-accueil">
            <h1 class="pr-4 text-3xl text-white uppercase text-right drop-shadow-[1px_1px_2px_#5e5e4a]">
                {{ __('messages.Parce_quon_les_aime') }}
            </h1>
            <div class="flex justify-end">

            <div class="bg-[#626262] bg-opacity-50 w-1/3 h-5/6 rounded p-4 m-2 drop-shadow-[1px_1px_2px_#5e5e4a]">
                <p class="text-white text-base/loose leading-snug text-justify">
                    {{ __('messages.Introduction_p1') }}
                </p>
                <p class="text-white text-base/loose leading-snug text-justify mt-3">
                    {{ __('messages.Introduction_p2') }}
                </p>
                <p class="text-white text-base/loose leading-snug text-justify mt-3">
                    {{ __('messages.Introduction_p3') }}
                </p>
                <p class="text-white text-base/loose leading-snug text-justify mt-3">
                    {{ __('messages.Introduction_p4') }}
                </p>
            </div>
            </div>
        </section>
        <section class="w-5/6 text-right mt-4">
            <button class="p-3 text-right bg-[#5e5e4a] hover:bg-gray-700 text-white">
                <a href="{{ '/products' }}">{{ __('messages.Magasinez') }}</a>
            </button>
        </section>
        <section class="mt-4 mb-4 grid grid-cols-[6fr,1fr] w-5/6 h-1/2 gap-4">
            <div>
                <p class="text-2xl  mb-4">{{ __('messages.Les_jouets_interactifs') }}</p>
                <p class="text-gray-800 text-justify">
                    {{ __('messages.Jouets_p1') }}
                </p>
                <p class="text-gray-800 mt-3 text-justify">
                    {{ __('messages.Jouets_p2') }}
                </p>
                <p class="text-gray-800 mt-3 text-justify">
                    {{ __('messages.Jouets_p3') }}
                </p>
                <p class="text-gray-800 mt-3 text-justify">
                    {{ __('messages.Jouets_p4') }}
                </p>
                <p class="text-gray-800 mt-3 text-justify">
                    {{ __('messages.Jouets_p5') }}
                </p>
            </div>
            <div class="flex flex-col h-full justify-center items-center">
                <img src="{{ asset('storage\images\accueilimg2.jpeg') }}" class="h-96 w-48 object-cover"/>
                <button class="border border-[#5e5e4a] w-32 hover:bg-gray-400 text-gray-800 p-3 m-2">
                    <a href="{{ '/products' }}" class="text-xs text-[#5e5e4a]">
                        {{ __('messages.Voir_les_jouets') }}
                    </a>
                </button>
            </div>
        </section>
    </div>
@endsection

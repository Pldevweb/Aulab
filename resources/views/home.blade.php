@extends('layouts.app')

@section('content')
    <section class="w-5/6 h-5/6 mt-5 bg-cover bg-center bg-accueil">

        <div class="flex justify-end">
            <div
                class="bg-[#626262] bg-opacity-30 shadow-[0px_0px_5px_#383838] w-1/3 h-5/6 rounded p-4 m-2 drop-shadow-[1px_1px_0px_#6c6c5b]">
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
    <section class="w-5/6 text-right mt-5 mb-5">
        <button class="p-3 text-right bg-button hover:bg-[#727262] text-white">
            <a href="{{ '/products' }}">{{ __('messages.Magasinez') }}</a>
        </button>
    </section>
    <section class="mt-5 mb-5 grid grid-cols-[6fr,1fr] w-5/6 h-1/2 gap-4">
        <div>
            <h1 class="text-2xl text-main-color mb-4 uppercase">{{ __('messages.Les_jouets_interactifs') }}</h1>
            <p class=" text-main-color text-justify">
                {{ __('messages.Jouets_p1') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Jouets_p2') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Jouets_p3') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Jouets_p4') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Jouets_p5') }}
            </p>
        </div>
        <div class="flex flex-col h-full justify-center items-center">
            <img src="{{ asset('storage\images\accueilimg2.jpeg') }}" class="h-96 w-48 object-cover" />
            <button class="border border-[#5e5e4a] w-32 hover:bg-[#e3e3d2] text-gray-800 p-3 m-2">
                <a href="{{ '/products' }}" class="text-xs text-main-color">
                    {{ __('messages.Voir_les_jouets') }}
                </a>
            </button>
        </div>
    </section>
    <section class="mt-5 mb-5 grid grid-cols-[2fr,5fr] w-5/6 gap-4">
        <img src="{{ asset('storage\images\accueilimg3.png') }}"
            class="h-full object-cover drop-shadow-[-1em_1em_0px_#5e5e4a]" />
        <div>
            <h1 class="uppercase text-2xl text-justify text-main-color p-2">
                {{ __('messages.Les_friandises') }}
            </h1>
            <p class="text-justify text-main-color">
                {{ __('messages.Les_friandises_p1') }}
            </p>
            <p class="text-justify mt-3 text-main-color">
                {{ __('messages.Les_friandises_p2') }}
            </p>
            <p class="text-justify mt-3 text-main-color">
                {{ __('messages.Les_friandises_p3') }}
            </p>
            <p class="text-justify mt-3 text-main-color">
                {{ __('messages.Les_friandises_p4') }}
            </p>
            <div class="text-center">
                <button class="border border-[#5e5e4a] w-32 hover:bg-[#e3e3d2] text-gray-800 p-3 m-2">
                    <a href="{{ '/products' }}" class="text-xs text-main-color">
                        {{ __('messages.Voir_les_friandises') }}
                    </a>
                </button>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 grid grid-cols-[2fr,1fr] w-5/6 h-1/2 gap-4">
        <div>
            <h1 class="text-2xl text-main-color mb-4 uppercase">
                {{ __('messages.Le_Chiot') }}
            </h1>
            <p class=" text-main-color text-justify">
                {{ __('messages.Le_chiot_p1') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Le_chiot_p2') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Le_chiot_p3') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Le_chiot_p4') }}
            </p>
        </div>
        <div class="flex flex-col h-full justify-center items-center">
            <img src="{{ asset('storage\images\accueilimg4.png') }}" class="h-3/5 object-cover" />
            <button class="border border-[#5e5e4a] w-36 hover:bg-[#e3e3d2] text-gray-800 p-3 m-5">
                <a href="{{ '/products' }}" class="text-xs text-main-color">
                    {{ __('messages.Voir_nos_essentiels') }}
                </a>
            </button>
        </div>
    </section>
    <section class="mt-5 mb-5 grid grid-cols-[1fr,1fr] w-5/6 h-1/2 gap-4">
        <div class="flex flex-col h-full justify-center items-center">
            <img src="{{ asset('storage\images\accueilimg5.jpg') }}" class="h-3/5 object-cover" />
            <button class="border border-[#5e5e4a] w-36 hover:bg-[#e3e3d2] text-gray-800 p-3 m-10">
                <a href="{{ '/products' }}" class="text-xs text-main-color">
                    {{ __('messages.Voir_nos_equipements') }}
                </a>
            </button>
        </div>
        <div>
            <h1 class="text-2xl text-main-color mb-4 uppercase">
                {{ __('messages.Le_Chien_Actif') }}
            </h1>
            <p class=" text-main-color text-justify">
                {{ __('messages.Le_Chien_Actif_p1') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Le_Chien_Actif_p2') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Le_Chien_Actif_p3') }}
            </p>
            <p class=" text-main-color mt-3 text-justify">
                {{ __('messages.Le_Chien_Actif_p4') }}
            </p>
        </div>
    </section>
@endsection

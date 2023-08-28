@extends('layouts.app')

@section('content')
    <div class="bg-[#DBDBD8]">
        <div class="flex justify-center h-screen">
            <div class="w-5/6 mt-3 bg-white flex justify-center">
                <div class="w-5/6 h-3/4 mt-8 mb-0 bg-white relative bg-cover bg-center"
                    style="background-image: url(https://hips.hearstapps.com/hmg-prod/images/golden-retriever-royalty-free-image-506756303-1560962726.jpg?crop=1.00xw:0.756xh;0,0.0756xh&resize=1200:*)">
                    <h1 class="absolute top-0 right-0 p-4 text-3xl mr-4 text-white text-right uppercase">
                        {{ __('messages.Parce_quon_les_aime') }}</h1>
                    <div class="bg-[#626262] bg-opacity-50 w-1/4 h-5/6 rounded absolute top-20 right-0 p-4 mr-2">
                        <div class="p-4 rounded">

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

                </div>
                <div class="text-black mt-4">
                    <button
                        class="bg-[#5e5e4a] hover:bg-gray-700 text-white py-2 px-4  absolute bottom-0 right-80 mr-20 w-48">
                        <a href="{{ '/products' }}">{{ __('messages.Magasinez') }}</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex justify-center h-screen">
            <div class="w-5/6  bg-white flex justify-center">
                <div class="grid grid-cols-[6fr,1fr] w-5/6 h-1/2 gap-4">
                    <div class="">
                        <p class="text-2xl  mb-4">{{ __('messages.Les_jouets_interactifs') }}</p>
                        <p class="text-gray-800">
                            {{ __('messages.Jouets_p1') }}
                        </p>
                        <p class="text-gray-800 mt-3">
                            {{ __('messages.Jouets_p2') }}
                        </p>
                        <p class="text-gray-800 mt-3">
                            {{ __('messages.Jouets_p3') }}
                        </p>
                        <p class="text-gray-800 mt-3">
                            {{ __('messages.Jouets_p4') }}
                        </p>
                        <p class="text-gray-800 mt-3">
                            {{ __('messages.Jouets_p5') }}
                        </p>
                    </div>
                    <div class="flex flex-col justify-between h-full">
                        <div class="flex items-center justify-center h-96 w-48 bg-cover bg-center object-cover"
                            style="background-image: url('https://www.akc.org/wp-content/uploads/2021/07/Cavalier-King-Charles-Spaniel-laying-down-indoors.jpeg')">
                        </div>
                        <div class="flex items-center">
                            <button
                                class="border border-[#5e5e4a] mb-56 h-auto ml-8 w-32 hover:bg-gray-400 text-gray-800 p-3">
                                <a href="{{ '/products' }}" class="text-xs text-[#5e5e4a]">
                                    {{ __('messages.Voir_les_jouets') }}
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

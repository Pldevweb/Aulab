@extends('layouts.app')

@section('content')
    <div class="h-full">

        <div class="border-b-2 block md:flex my-32">

            <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md border border-gray-200">
                <div class="flex justify-center">
                    <span class="text-xl font-semibold block">Photo de profil</span>
                </div>
                <div class="w-full p-8 mx-2 flex justify-center">
                    <img id="showImage" class="max-w-xs w-32 items-center border border-gray-700 rounded"
                        src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="">
                </div>
            </div>

            <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md border border-gray-200">
                <div class="rounded  shadow p-6 border border-gray-200">
                    <div class="pb-6">
                        <label for="name" class="font-semibold text-gray-700 block pb-1">Nom</label>
                        <div class="flex">
                            <input id="username" class="border border-gray-700  rounded px-4 py-2 w-full" type="text"
                                placeholder="{{ Auth::user()->name }}" />
                        </div>
                    </div>
                    <div class="pb-4">
                        <label for="about" class="font-semibold text-gray-700 block pb-1">Courriel</label>
                        <input id="email" class="border border-gray-700 rounded px-4 py-2 w-full mb-8" type="email"
                            placeholder="{{ Auth::user()->email }}" />
                        <span class="text-gray-600">Informations de connexion personnelles de votre compte.</span>
                    </div>


                </div>
            </div>

        </div>

    </div>
@endsection

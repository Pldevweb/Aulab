@extends('layouts.app')

@section('content')
    <!-- SECTION 1 -->

    <!-- mobile/tablette -->
    <section class="w-5/6 h-64 mt-5 bg-cover bg-center bg-accueil lg:hidden">
    </section>
    <div class="flex justify-end lg:hidden">
        <div class="bg-white rounded-lg shadow-md text-main-color p-4 m-4">
            <p class="text-base/loose leading-snug text-justify">
                {{ __('messages.Introduction_p1') }}
            </p>
            <p class="text-base/loose leading-snug text-justify mt-3">
                {{ __('messages.Introduction_p2') }}
            </p>
            <p class="text-base/loose leading-snug text-justify mt-3">
                {{ __('messages.Introduction_p3') }}
            </p>
            <p class="text-base/loose leading-snug text-justify mt-3">

                {{ __('messages.Introduction_p4') }}
            </p>
        </div>
    </div>

    <!-- web -->
    <section class="hidden lg:block lg:w-5/6  lg:mt-5 lg:bg-cover lg:bg-center lg:bg-accueil" style="height: 750px">
        <div class="flex justify-end my-20">
            <div
                class="bg-[#626262] bg-opacity-30 shadow-[0px_0px_5px_#383838] w-1/3 h-5/6 rounded p-4 m-2 drop-shadow-[1px_1px_0px_#6c6c5b]">
                <p class="text-white text-sm leading-snug text-justify">
                    {{ __('messages.Introduction_p1') }}
                </p>
                <p class="text-white text-sm leading-snug text-justify mt-3">
                    {{ __('messages.Introduction_p2') }}
                </p>
                <p class="text-white text-sm leading-snug text-justify mt-3">
                    {{ __('messages.Introduction_p3') }}
                </p>
                <p class="text-white text-sm leading-snug text-justify mt-3">
                    {{ __('messages.Introduction_p4') }}
                </p>
            </div>
        </div>
    </section>
    <div class="w-5/6 text-right mt-5 mb-5">
        <button class="p-3 text-right bg-button hover:bg-[#727262] text-white">
            <a href="{{ route('produits-pour-chiens.index') }}">{{ __('messages.Magasinez') }}</a>
        </button>
    </div>

    <!-- SECTION 2 -->
    <section class="mt-16 mb-5 lg:grid lg:grid-cols-[6fr,2fr] w-5/6 h-1/2 gap-4">
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
            <img src="{{ asset('storage\images\accueilimg2.jpeg') }}" class="lg:h-96 lg:w-60 object-cover" />
            <button class="border border-[#5e5e4a] w-32 hover:bg-[#e3e3d2] text-gray-800 p-3 m-2">
                <a href="{{ route('productsbycategorie', 'jouets') }}" class="text-xs text-main-color">
                    {{ __('messages.Voir_les_jouets') }}
                </a>
            </button>
        </div>
    </section>

    <!-- SECTION 3 -->
    <section class="mt-16 lg:mb-5 lg:grid lg:grid-cols-[2fr,5fr] w-5/6 lg:gap-4">
        <img src="{{ asset('storage\images\accueilimg3.png') }}"
            class="h-full object-cover drop-shadow-[-1em_1em_0px_#5e5e4a]" />
        <div class="mt-5 lg:mt-0">
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
                    <a href="{{ route('productsbycategorie', 'nourriture') }}" class="text-xs text-main-color">
                        {{ __('messages.Voir_les_friandises') }}
                    </a>
                </button>
            </div>
        </div>
    </section>

    <!-- SECTION 4 -->
    <section class="mt-16 mb-5 lg:grid lg:grid-cols-[2fr,1fr] w-5/6 h-1/2 lg:gap-4">
        <div class="flex flex-col h-full justify-center items-center lg:hidden">
            <img src="{{ asset('storage\images\accueilimg4.png') }}" class="block h-3/5 object-cover mb-5" />
        </div>
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
            <img src="{{ asset('storage\images\accueilimg4.png') }}" class="hidden lg:block lg:h-3/5 lg:object-cover" />
            <button class="border border-[#5e5e4a] w-36 hover:bg-[#e3e3d2] text-gray-800 p-3 m-5">
                <a href="{{ route('produits-pour-chiens.index') }}" class="text-xs text-main-color">
                    {{ __('messages.Voir_nos_essentiels') }}
                </a>
            </button>
        </div>
    </section>

    <!-- SECTION 5 -->
    <section class="mt-16 mb-5 lg:grid lg:grid-cols-[1fr,1fr] w-5/6 h-1/2 lg:gap-4">
        <div class="flex flex-col h-full justify-center items-center">
            <img src="{{ asset('storage\images\accueilimg5.jpg') }}" class="h-3/5 object-cover mb-5" />
            <button
                class="hidden lg:block lg:border lg:border-[#5e5e4a] lg:w-36 lg:hover:bg-[#e3e3d2] lg:text-gray-800 lg:p-3 lg:m-10">
                <a href="{{ route('productsbycategorie', 'accessoires de sport') }}" class="text-xs text-main-color">
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
        <div class="flex flex-col h-full justify-center items-center">
            <button class="border border-[#5e5e4a] w-36 hover:bg-[#e3e3d2] text-gray-800 p-3 m-10 lg:hidden">
                <a href="{{ route('produits-pour-chiens.index') }}" class="text-xs text-main-color">
                    {{ __('messages.Voir_nos_equipements') }}
                </a>
            </button>
        </div>
    </section>

    <!-- SECTION 6 -->
    <section class="mt-16">
        <h2 class="uppercase text-main-color text-center">
            {{ __('messages.Encore_plus') }}
        </h2>
        <div class="grid lg:grid-cols-3 gap-5 px-10 lg:px-52 py-5">
            <div class="text-main-color text-justify">
                <div class="flex justify-center"><img src="{{ asset('storage\images\chien.png') }}"
                        class="w-40 h-40 object-cover mb-5 rounded-full" /></div>
                <h3 class="text-center">{{ __('messages.Le_comfort_de_la_maison') }}</h3>

                <p class="mt-3">{{ __('messages.Le_comfort_de_la_maison_p1') }}</p>

                <p class="mt-3">{{ __('messages.Le_comfort_de_la_maison_p2') }}</p>

                <p class="mt-3">{{ __('messages.Le_comfort_de_la_maison_p3') }}</p>
            </div>
            <div class="text-main-color text-justify">
                <div class="flex justify-center"><img src="{{ asset('storage\images\chien2.png') }}"
                        class="w-40 h-40 object-cover mb-5 rounded-full" /></div>
                <h3 class="text-center">{{ __('messages.Besoins_essentiels') }}</h3>

                <p class="mt-3">{{ __('messages.Besoins_essentiels_p1') }}</p>

                <p class="mt-3">{{ __('messages.Besoins_essentiels_p2') }}</p>
            </div>
            <div class="text-main-color text-justify">
                <div class="flex justify-center"><img src="{{ asset('storage\images\chien3.png') }}"
                        class="w-40 h-40 object-cover mb-5 rounded-full" /></div>
                <h3 class="text-center">{{ __('messages.Le_destructeur') }}</h3>

                <p class="mt-3">{{ __('messages.Le_destructeur_p1') }}</p>

                <p class="mt-3">{{ __('messages.Le_destructeur_p2') }}</p>

                <p class="mt-3">{{ __('messages.Le_destructeur_p3') }}</p>
            </div>
        </div>
    </section>

    <!-- SECTION 7 -->
    <div class="mt-16 bg-white text-main-color js-carousel w-full p-10">
        <h1 class="text-2xl text-main-color mb-4 uppercase text-center">{{ __('messages.Les_produits_favoris') }}</h1>
        <div class="w-10/12 mx-auto flex flex-col gap-2">
          <div class="flex items-center flex-row justify-center gap-1">
            <div class="cursor-pointer js-carousel-btn-left">
                <i class="fa-solid fa-caret-left"></i>
            </div>

            <div class="flex flex-row max-w-full h-full overflow-x-hidden js-carousel-viewport">
                @foreach ($products as $product)
                    <div class="w-full gap-1 flex-row p-2 items-center flex-shrink-0 flex justify-center text-center">
                        <div class="w-40 h-40 bg-gray-300">
                            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col text-justify p-5">
                            <div class="text-medium font-semibold">{{ $product->name }}</div>
                            <div class="text-sm">{{ $product->price }} $</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="cursor-pointer js-carousel-btn-right">
                    <i class="fa-solid fa-caret-right"></i>
            </div>
          </div>
        </div>
      </div>

    <!-- SECTION 8 -->
    <section class="bg-pattern w-full flex justify-center">
        <div class="flex flex-col lg:flex-row mx-10 my-5 lg:mx-40 lg:my-10 gap-5">
            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('storage\images\logospa.png') }}" />

                <button class="border border-[#5e5e4a] w-36 hover:bg-[#e3e3d2] text-gray-800 p-3 m-10 bg-white">
                    <a href="" class="text-xs text-main-color">
                        {{ __('messages.Faire_un_don') }}
                    </a>
                </button>
            </div>
            <div class="text-justify text-main-color">
                <p class="mt-3">{{ __('messages.Faire_un_don_p1') }}</p>

                <p class="mt-3">{{ __('messages.Faire_un_don_p2') }}</p>

                <p class="mt-3">{{ __('messages.Faire_un_don_p3') }}</p>
            </div>
        </div>
    </section>
@endsection

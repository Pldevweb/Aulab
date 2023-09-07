    <div class="flex flex-col justify-center">
        <div class="bg-footer text-main-color px-72 py-5 grid grid-cols-4 grid-rows-1 gap-x-5">
            <div>
                <h2 class="uppercase">{{ __('messages.La_boutique') }}</h2>
                <p class="text-sm text-justify">
                <ul>
                    @foreach ($categories as $categorie)
                        <li class="text-sm"><a href="{{ route('productsbycategorie', $categorie->slug) }}">{{ $categorie->name }}</a></li>
                    @endforeach
                </ul>
                </p>
            </div>
            <div>
                <h2 class="uppercase">{{ __('messages.Informations') }}</h2>
                <p class="text-sm text-justify">
                <ul>
                    <li class="text-sm">
                        <a href="/about">
                            {{ __('messages.A_propos') }}
                        </a>
                    </li>
                    <li class="text-sm">
                        <a href="/partners">
                            {{ __('messages.Nos_partenaires') }}
                        </a>
                    </li>
                    <li class="text-sm">
                        <a href="">
                            {{ __('messages.Politique_livraison') }}
                        </a>
                    </li>
                    <li class="text-sm">
                        <a href="">
                            {{ __('messages.FAQ') }}
                        </a>
                    </li>
                    <li class="text-sm">
                        <a href="/contact">
                            {{ __('messages.Contactez_nous') }}
                        </a>
                    </li>
                </ul>
                </p>
            </div>
            <div>
                <h2 class="uppercase">{{ __('messages.Mon_compte') }}</h2>
                <p class="text-sm text-justify">
                <ul>
                    <li class="text-sm">
                        <a href="">
                            {{ __('messages.Mes_commandes') }}
                        </a>
                    </li>
                    <li class="text-sm">
                        <a href="">
                            {{ __(('messages.Mes_adresses')) }}
                        </a>
                    </li>
                    <li class="text-sm">
                        <a href="">
                            {{ __('messages.Mes_informations_personnelles') }}
                        </a>
                    </li>
                </ul>
                </p>
            </div>
            <div>
                <h2 class="uppercase">{{ __('messages.Nous_contacter') }}</h2>
                <p class="text-sm text-justify">
                <ul>
                    <li class="text-sm">
                        <i class="fa-solid fa-phone"></i> 000-0000
                    </li>
                    <li class="text-sm">
                        <i class="fa-solid fa-envelope"></i> email@email.com
                    </li>
                </ul>
                </p>
            </div>
        </div>
        <div class="bg-footer-2 flex justify-center">
            <div class="grid grid-cols-[2fr_3fr_1fr] w-3/5">
                <div>
                    <p class="m-1 p-1 text-main-color text-sm">
                        Copyright @ 2023 Aulab. {{ __('messages.Tous_droits_reserves') }}<br />
                        {{ __('messages.Site_web_par') }}
                    </p>
                </div>
                <div class="m-1 p-1 text-main-color text-sm grid grid-cols-[1fr_1fr_10fr]">
                    <div class="bg-white w-8 h-6 flex items-center">
                        <img src="{{ asset('storage/images/mastercard.png') }}" class="p-1" />
                    </div>
                    <div class="bg-white w-8 h-6 flex items-center">
                        <img src="{{ asset('storage/images/visa.png') }}" class="p-1" />
                    </div>
                    <div class="bg-white w-8 h-6 flex items-center">
                        <img src="{{ asset('storage/images/paypal.png') }}" class="p-1" />
                    </div>
                </div>
                <div class="text-main-color text-lg flex items-center justify-end">
                    <button x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                        class="bg-button p-1 m-1 h-8 w-8 rounded-full text-sm focus:outline-none">
                        <i class="fa-solid fa-arrow-up text-white"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

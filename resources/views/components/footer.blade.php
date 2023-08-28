    <div>
        <div class="bg-[#cdcdc8] text-[#5e5e4a] px-72 py-5 grid grid-cols-4 grid-rows-1 gap-x-5">
            <div>
                <h2 class="uppercase">La boutique</h2>
                <p class="text-xs text-justify">
                <ul>
                    @foreach ($categories as $categorie)
                        <li class="text-xs"><a href="">{{ $categorie->name }}</a></li>
                    @endforeach
                </ul>
                </p>
            </div>
            <div>
                <h2 class="uppercase">Informations</h2>
                <p class="text-xs text-justify">
                <ul>
                    <li class="text-xs">
                        <a href="">
                            À propos
                        </a>
                    </li>
                    <li class="text-xs">
                        <a href="">
                            Nos partenaires
                        </a>
                    </li>
                    <li class="text-xs">
                        <a href="">
                            Politique de livraison
                        </a>
                    </li>
                    <li class="text-xs">
                        <a href="">
                            Foire aux questions
                        </a>
                    </li>
                    <li class="text-xs">
                        <a href="">
                            Contactez-nous
                        </a>
                    </li>
                </ul>
                </p>
            </div>
            <div>
                <h2 class="uppercase">Mon compte</h2>
                <p class="text-xs text-justify">
                <ul>
                    <li class="text-xs">
                        <a href="">
                            Mes commandes
                        </a>
                    </li>
                    <li class="text-xs">
                        <a href="">
                            Mes adresses
                        </a>
                    </li>
                    <li class="text-xs">
                        <a href="">
                            Mes informations personnelles
                        </a>
                    </li>
                </ul>
                </p>
            </div>
            <div>
                <h2 class="uppercase">Nous contacter</h2>
                <p class="text-xs text-justify">
                <ul>
                    <li class="text-xs">
                        <i class="fa-solid fa-phone"></i> 000-0000
                    </li>
                    <li class="text-xs">
                        <i class="fa-solid fa-envelope"></i> email@email.com
                    </li>
                </ul>
                </p>
            </div>
        </div>
        <div class="bg-[#c1c1ba] flex justify-center">
            <div class="grid grid-cols-[2fr_3fr_1fr] w-3/5">
                <div>
                    <p class="m-1 p-1 text-[#5e5e4a] text-xs">
                        Copyright @ 2023 Aulab. Tous droits réservés.<br />
                        Site web par Danyka Enair et Pier-Luc Lemay
                    </p>
                </div>
                <div class="m-1 p-1 text-[#5e5e4a] text-xs grid grid-cols-[1fr_1fr_10fr] flex items-center">
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
                <div class="text-[#5e5e4a] text-xs flex items-center justify-end">
                    <button x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                        class="bg-[#5e5e4a] p-1 m-1 h-8 w-8 rounded-full text-sm focus:outline-none">
                        <i class="fa-solid fa-arrow-up text-white"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

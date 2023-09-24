<div class="w-full flex items-center justify-center bg-primary font-sans h-7 p-2" id="navbar-user">
    <a href="" class="text-white text-center font-sans text-sm uppercase">
        {{ __('messages.Offres') }}
    </a>
</div>
<div class="bg-white min-w-full flex items-center justify-center">
    <div x-data="{ open: false }">
        <button @click="open = !open"
            class="md:hidden block px-2 py-1 text-menu-link rounded hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:border-transparent">
            <i class="fa-solid fa-bars"></i>
        </button>

        <div x-show="open"
            class="md:hidden fixed top-0 left-0 w-full h-screen bg-black opacity-80 z-10">
        </div>

        <div x-show="open" @click.away="open = false" x-transition:enter="transform transition-transform ease-in-out duration-300"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition-transform ease-in-out duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
            class="md:hidden fixed top-0 left-0 w-10/12 h-screen z-10">

            <button @click="open = false"
                class="absolute top-0 left-full m-1 p-1 z-10 text-white rounded hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:border-transparent">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="fixed top-0 w-10/12 font-bold bg-primary text-white p-2 z-20">
                @auth
                    {{ __('messages.Bienvenue') }}, {{ Auth::user()->name }}.
                @else
                    {{ __('messages.Bienvenue') }}, {{ __('messages.Invite') }}.
                @endauth
            </div>

            <ul class="fixed top-0 bg-[#c1c1ba] w-10/12 h-screen py-20 px-10 z-10">
                <li>
                    <a href="{{ url('/') }}" class="block text-menu-link hover:bg-transparent hover:text-white">
                        {{ __('messages.Accueil') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/produits-pour-chiens') }}" class="block text-menu-link hover:bg-transparent hover:text-white">
                        {{ __('messages.Boutique') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/partners') }}" class="block text-menu-link hover:bg-transparent hover:text-white">
                        {{ __('messages.Partenaire') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/blog') }}" class="block text-menu-link hover:bg-transparent hover:text-white">
                        {{ __('messages.Blog') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}" class="block text-menu-link hover:bg-transparent hover:text-white">
                        {{ __('messages.A_propos_dAulab') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}" class="block text-menu-link hover:bg-transparent hover:text-white">
                        {{ __('messages.Nous_contacter') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-full md:w-2/4 flex items-start md:items-center justify-end">
        <a href="{{ url('/') }}">
            <img src="{{ asset('storage/images/LOGO.webp') }}" alt="Aulab Logo" />
        </a>
    </div>

    <div class="w-11/12 lg:w-1/4 flex items-center justify-center">
        <form class="flex items-center content-stretch" action="{{ route('productSearch') }}" method="GET">

            <label for="simple-search" class="sr-only">Search</label>
            <input
                class="h-7 w-3/4 md:w-56 border-none p-1 text-sm bg-[#f2f2f1] placeholder-[#cbcbc6] placeholder:italic"
                type="text" id="simple-search" name="query" placeholder="Rechercher..." required>
            <button type="submit" class="bg-[#d5d5d0] p-1 h-7 text-[#90908c]">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    <div class="flex justify-end w-1/3 px-10 items-center">
        <a href="{{ route('cart.index') }}" class="p-1 h-8 w-8 rounded-full">
            <i class="fa-solid fa-cart-shopping text-button text-lg"></i>
        </a>
        @guest
            @if (Route::has('login'))
                <div x-data="{ dropdownMenu: false }" class="relative" @click.away="dropdownMenu = false">
                    <button @click="dropdownMenu = ! dropdownMenu"
                        class="flex justify-end items-end p-2 bg-white rounded-md focus:outline-none">
                        <span class="bg-button p-1 h-8 w-8 rounded-full">
                            <i class="fa-solid fa-user text-white"></i>
                        </span>
                    </button>
                    <template x-if="true">
                        <div x-show="dropdownMenu" class="absolute right-0 py-2 mt-2 bg-white rounded-md shadow-xl w-44">
                            <a href="{{ route('login') }}"
                                class="block px-4 py-2 text-sm text-gray-300 hover:bg-button hover:text-white"
                                role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('messages.Login') }}
                            </a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="block px-4 py-2 text-sm text-gray-300 hover:bg-button hover:text-white">
                    {{ __('messages.Register') }}
                </a>
        </div>
        </template>
    </div>
    @endif
@else
    <div x-data="{ dropdownMenu: false }" class="relative" @click.away="dropdownMenu = false">
        <button @click="dropdownMenu = ! dropdownMenu"
            class="flex justify-end items-end p-2 bg-white rounded-md focus:outline-none hover:opacity-90 opacity-100">
            @if (Auth::user()->avatar)
                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile Photo"
                    class="p-1 h-10 w-10 rounded-full object-cover">
            @else
                <span class="bg-button p-1 h-8 w-8 rounded-full">
                    <i class="fa-solid fa-user text-white"></i>
                </span>
            @endif

        </button>
        <template x-if="true">
            <div x-show="dropdownMenu"
                class="absolute right-0 py-2 mt-2 rounded-md shadow-sm w-44 bg-card border-2 border-[#ededed]">
                <div class="block px-4 py-2 text-sm text-center font-semibold text-[#656553]">
                    @auth
                    {{ __('messages.Bienvenue') }}, {{ Auth::user()->name }}.
                    @else
                        {{ __('messages.Bienvenue') }}, {{ __('messages.Invite') }}.
                    @endauth

                </div>
                <hr />
                @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                    <a href="{{ route('voyager.dashboard') }}"
                        class="block px-4 py-2 text-sm text-main-color hover:bg-[#ededed] hover:text-[#808073]"
                        role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('messages.Panneau_administrateur') }}
                    </a>
                @endif
                <hr />
                <a href="{{ route('editprofile') }}"
                    class="block px-4 py-2 text-sm text-main-color hover:bg-[#ededed] hover:text-[#808073]" role="button"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ __('messages.Editer_mon_profil') }}
                </a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                    class="block px-4 py-2 text-sm text-main-color hover:bg-[#ededed] hover:text-[#808073]">
                    {{ __('messages.Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </template>
    </div>
@endguest
</div>
</div>
<nav class="hidden md:w-full md:flex md:flex-wrap md:items-center md:justify-between md:mx-auto md:p-1 md:bg-[#c1c1ba]">
    <ul
        class="mx-auto flex flex-col font-medium border-0 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 text-sm">
        <li>
            <a href="{{ url('/') }}"
                class="block md:py-1 md:px-4 text-menu-link rounded md:hover:bg-transparent md:hover:text-white md:p-0 text-sm uppercase font-semibold">
                {{ __('messages.Accueil') }}
            </a>
        </li>
        <li>
            <a href="{{ url('/produits-pour-chiens') }}"
                class="block md:py-1 md:px-4 text-menu-link rounded md:hover:bg-transparent md:hover:text-white md:p-0 text-sm uppercase font-semibold">
                {{ __('messages.Boutique') }}
            </a>
        </li>
        <li>
            <a href="{{ url('/partners') }}"
                class="block md:py-1 md:px-4 text-menu-link rounded md:hover:bg-transparent md:hover:text-white md:p-0 text-sm uppercase font-semibold">
                {{ __('messages.Partenaire') }}
            </a>
        </li>
        <li>
            <a href="{{ url('/blog') }}"
                class="block md:py-1 md:px-4 text-menu-link rounded md:hover:bg-transparent md:hover:text-white md:p-0 text-sm uppercase font-semibold">
                {{ __('messages.Blog') }}
            </a>
        </li>
        <li>
            <a href="{{ url('/about') }}"
                class="block md:py-1 md:px-4 text-menu-link rounded md:hover:bg-transparent md:hover:text-white md:p-0 text-sm uppercase font-semibold">
                {{ __('messages.A_propos_dAulab') }}
            </a>
        </li>
        <li>
            <a href="{{ url('/contact') }}"
                class="block md:py-1 md:px-4 text-menu-link rounded md:hover:bg-transparent md:hover:text-white md:p-0 text-sm uppercase font-semibold">
                {{ __('messages.Nous_contacter') }}
            </a>
        </li>
    </ul>
</nav>

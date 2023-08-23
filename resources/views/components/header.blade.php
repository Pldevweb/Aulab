<div>
    <div class="w-full flex items-center justify-center bg-[#5e5e4a] font-sans h-7 p-2" id="navbar-user">
        <a href="" class="text-white text-center font-sans text-xs">
            OFFRE EN COURS ICI
        </a>
    </div>
        <div class="min-w-full flex items-center justify-center">
            <div class="w-2/4 flex items-center justify-end">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('storage/images/LOGO.webp') }}" alt="Aulab Logo"/>
                </a>
            </div>
            <div class="w-1/4 flex items-center justify-center">
                <form class="flex items-center content-stretch">
                    <label for="simple-search" class="sr-only">Search</label>
                    <input class="h-7 w-56 border-none p-1 text-xs bg-[#f2f2f1] placeholder-[#cbcbc6] placeholder:italic" type="text" id="simple-search" placeholder="Rechercher..." required>
                    <button type="submit" class="bg-[#d5d5d0] p-1 h-7 text-[#90908c]">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
            <div class="flex justify-end w-1/3 px-10">
        {{-- @guest
            @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}">{{ __('messages.Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">{{ __('messages.Register') }}</a>
                </li>
            @endif
            @else --}}
            @guest
            @if (Route::has('login'))
            <div x-data="{dropdownMenu: false}" class="relative" @click.away="dropdownMenu = false">
                <!-- Dropdown toggle button -->
                <button @click="dropdownMenu = ! dropdownMenu" class="flex justify-end items-end p-2 bg-white bg-gray-100 rounded-md">
                    <span class="bg-[#5e5e4a] p-1 h-8 w-8 rounded-full">
                        <i class="fa-solid fa-user text-white"></i>
                    </span>
                </button>
                <!-- Dropdown list -->
                <template x-if="true">
                <div x-show="dropdownMenu" class="absolute right-0 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl w-44">
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('messages.Login') }}
                    </a>
                    @endif
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                        {{ __('messages.Register') }}
                    </a>
                </div>
            </template>
                </div>
                    @endif
                    @else
            <div x-data="{dropdownMenu: false}" class="relative" @click.away="dropdownMenu = false">
                <!-- Dropdown toggle button -->
                <button @click="dropdownMenu = ! dropdownMenu" class="flex justify-end items-end p-2 bg-white bg-gray-100 rounded-md">
                    <span class="bg-[#5e5e4a] p-1 h-8 w-8 rounded-full">
                        <i class="fa-solid fa-user text-white"></i>
                    </span>
                </button>
                <!-- Dropdown list -->
                <template x-if="true">
                <div x-show="dropdownMenu" class="absolute right-0 py-2 mt-2 bg-white bg-gray-100 rounded-md shadow-xl w-44">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                        {{ __('messages.Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </template>
            </div>

            {{-- <li>
                <a href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('messages.Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li> --}}
        @endguest
            </div>
        </div>
        <nav class="w-full flex flex-wrap items-center justify-between mx-auto p-1 bg-[#a4a4a4]">
            <ul class="mx-auto flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-sm">
                <li>
                <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm font-semibold uppercase">Accueil</a>
                </li>
                <li>
                <a href="{{ url('/products') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm font-semibold uppercase">Boutique</a>
                </li>
                <li>
                <a href="{{ url('/partners') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm font-semibold uppercase">Partenaire</a>
                </li>
                <li>
                <a href="{{ url('/blog') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm font-semibold uppercase">Blog</a>
                </li>
                <li>
                <a href="{{ url('/about') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm font-semibold uppercase">À propos D'Aulab</a>
                </li>
                <li>
                <a href="{{ url('/contact') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm font-semibold uppercase">Nous connecter</a>
                </li>
            </ul>
        </nav>
</div>

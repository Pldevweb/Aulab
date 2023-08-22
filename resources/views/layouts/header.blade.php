<header>
    <div class="w-full flex items-center justify-center bg-[#5e5e4a] font-sans h-7 p-2" id="navbar-user">
        <a href="" class="text-white text-center font-sans text-xs">
          OFFRE EN COURS ICI
        </a>
    </div>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
      <div class="p-6 text-right text-xl ml-8 sm:fixed sm:top-10 sm:right-0 font-sans">
        <div class="flex items-center mb-4 sm:hidden">
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500 font-sans">Se Connecter</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500 font-sans">S'inscrire</a>
          @endif
        </div>

        @auth
            <a href="{{ route('home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">ACCUEIL</a>

            @else <div class="hidden sm:block">
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500 font-sans">Se Connecter</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500 font-sans">S'inscrire</a>
            @endif
            </div>
        @endauth
      </div>
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-8">
        <a href="{{ url('/') }}" class="flex items-center">
          <img src="{{ asset('storage/images/LOGO.webp') }}" alt="Aulab Logo" />
        </a>
        <form class="flex items-center">
          <label for="simple-search" class="sr-only">Search</label>
          <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
              <svg class="w-2 h-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
              </svg>
            </div>
            <input type="text" id="simple-search" class="focus:border-gray-500 block w-full pl-6 py-1 mt-4 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500 text-sm" placeholder="Rechercher..." required>
          </div>
          <button type="submit" class="p-2 ml-2 mt-4 text-sm font-medium text-white bg-gray-300 border-gray-300 hover:bg-gray-300 focus:ring-2 focus:outline-none focus:ring-gray-300 dark:bg-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search</span>
          </button>
        </form>
        <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
          </button>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
        </button>
      </div>
      <div class="w-full flex flex-wrap items-center justify-between mx-auto p-1 bg-[#a4a4a4]" id="navbar-user">
        <ul class="mx-auto flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 text-sm">
          <li>
            <a href="{{ url('/') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm">ACCUEIL</a>
          </li>
          <li>
            <a href="{{ url('/products') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm">BOUTIQUE</a>
          </li>
          <li>
            <a href="{{ url('/partners') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm">PARTENAIRE</a>
          </li>
          <li>
            <a href="{{ url('/blog') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm">BLOG</a>
          </li>
          <li>
            <a href="{{ url('/about') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm">À PROPOS D'AULAB</a>
          </li>
          <li>
            <a href="{{ url('/contact') }}" class="block py-2 pl-3 pr-4 text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 font-sans text-sm">NOUS CONTACTER</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

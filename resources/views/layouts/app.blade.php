@extends('layouts.base')
<head>

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="w-full flex flex-wrap items-center justify-center mx-auto p-2 bg-[#5e5e4a]" id="navbar-user">
            <a href="https://flowbite.com/" class="flex items-center">
                <p class="text-white text-center">OFFRE EN COURS ICI</p>
            </a>   
        </div>
        
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center">
            <img src="{{ asset('storage/images/SANS NOM.webp') }}" class="h-18 mr-3" alt="Flowbite Logo" />
        </a>
        <form class="flex items-center">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                    <svg class="w-2 h-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </div>
                <input type="text" id="simple-search" class="focus:border-gray-500 block w-full pl-6 py-1 mt-4 dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Rechercher..." required>
            </div>
            <button type="submit" class="p-2 ml-2 mt-4 text-sm font-medium text-white bg-gray-300 border-gray-300 hover:bg-gray-300 focus:ring-2 focus:outline-none focus:ring-gray-300 dark:bg-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
        <div class="flex items-center md:order-2">
            <button type="button" class="flex mr-3" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
              <span class="sr-only">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="{{ asset('storage/images/profile.png') }}" alt="user photo">
            </button>
        </div>
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-[#5e5e4a] dark:text-white">Bonnie Green</span>
              <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
            </div>
            <ul class="py-2" aria-labelledby="user-menu-button">
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
              </li>
            </ul>
          </div>
          <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
      </div>
      <div class="w-full flex flex-wrap items-center justify-between mx-auto p-2 bg-[a4a4a4]" id="navbar-user">
        <ul class="mx-auto flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-xl text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ACCUEIL</a>
              </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-xl text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">BOUTIQUE</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-xl text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PARTENAIRE</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-xl text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">BLOG</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-xl text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">À PROPOS D'AULAB</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-xl text-[#5e5e4a] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">NOUS CONTACTER</a>
          </li>
        </ul>
      </div>
      </nav>
      
      
</head>
@section('body')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection


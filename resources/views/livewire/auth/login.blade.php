@section('title', 'Sign in to your account')

<div class="w-full py-20">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h1 class="text-2xl font-semibold text-main-color mt-2">
            {{ __('messages.Connexion') }}
        </h1>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        {{ __('messages.Courriel') }}
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus
                            class="appearance-none block w-full px-3 py-2 border text-main-color border-[#c1c1ba] rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-[#5e5e4a] transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        {{ __('messages.Mot_de_passe') }}
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required
                            class="appearance-none block w-full px-3 py-2 border text-main-color border-[#c1c1ba] rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-[#5e5e4a] transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input wire:model.lazy="remember" id="remember" type="checkbox"
                            class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                        <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                            {{ __('messages.Remember_me') }}
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}"
                            class="font-medium text-menu-link hover:text-menu-link-hover focus:outline-none focus:underline transition ease-in-out duration-150">
                            {{ __('messages.Forget_password') }}
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                            class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-button border border-transparent rounded-md hover:bg-button-hover focus:outline-none focus:border-button-focus focus:ring-indigo active:bg-button-active transition duration-150 ease-in-out">
                            {{ __('messages.Connexion') }}
                        </button>
                    </span>
                    @if (Route::has('register'))
                        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                            {{ __('messages.Not_member') }}
                            <a href="{{ route('register') }}"
                                class="font-medium text-menu-link hover:text-menu-link-hover focus:outline-none focus:underline transition ease-in-out duration-150">
                                {{ __('messages.Inscrivez_vous') }}
                            </a>
                        </p>
                    @endif
            </form>
        </div>
    </div>
</div>

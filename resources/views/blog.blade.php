@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-semibold mb-4 text-main-color">
            {{ __('messages.Les_articles') }}
        </h1>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($articles as $article)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{ asset('storage/' . $article->user->avatar) }}" alt="photo de profil"
                        class="float-left w-14 h-14 mr-1 object-cover">
                    <div class="font-bold text-main-color">
                        {{ $article->user->name }}
                    </div>
                    <div class="text-xs italic border-b-2 text-main-color">
                        @if ($article->user && $article->user->role)
                            {{ $article->user->role->display_name }}
                        @endif
                    </div>
                    <div>
                        <h2 class="text-base font-semibold mb-2 text-main-color m-5">
                            {{ $article->title }}
                        </h2>
                        <div class="w-72 h-72 lg:w-96 lg:h-96 max-w-full">
                            <img src="storage/{{ $article->thumbnail }}" alt="{{ $article->title }}"
                                class="mb-2 w-full h-full object-cover">
                        </div>
                        <p class="text-sm text-justify text-main-color">
                            {{ substr($article->content, 0, 100) . (strlen($article->content) > 100 ? '...' : '') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

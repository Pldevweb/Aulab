@extends('layouts.app')

@section('content')
    <div class="p-4">
        <h1 class="text-2xl font-semibold mb-4 text-main-color">
            {{ __('messages.Les_articles') }}
        </h1>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($articles as $article)
                <div class="bg-[#f8f8f8] rounded-lg shadow-md p-6">
                    <img src="storage/{{ $article->user->profile_photo }}" alt="photo de profil" class="float-left w-1/6 mr-1">
                    <strong>{{ $article->user->name }}</strong>
                    @if ($article->user && $article->user->role)
                        {{ $article->user->role->display_name }}
                    @endif
                    <h2 class="text-base font-semibold mb-2 text-[#5e5e4a]">{{ $article->title }}</h2>
                    <img src="storage/{{ $article->thumbnail }}" alt="{{ $article->title }}" class="mb-2">
                    <p class="text-sm text-[#5e5e4a] text-justify">{{ substr($article->content, 0, 100) . (strlen($article->content) > 100 ? '...' : '') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

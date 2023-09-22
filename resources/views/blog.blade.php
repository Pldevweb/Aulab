@extends('layouts.app')

@section('content')
    <div class="p-4 w-full">
        <div class="flex gap-1">
            <a class="p-2 text-sm text-center bg-button hover:bg-[#727262] text-white" href="{{ route('home') }}">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>
        <h1 class="text-2xl font-semibold mb-4 text-main-color">
            {{ __('messages.Les_articles') }}
        </h1>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($articles as $article)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="{{ asset('storage/' . $article->user->avatar) }}" alt="photo de profil" class="float-left w-14 h-14 mr-1 object-cover rounded-lg">
                    <div class="font-bold text-main-color">
                        {{ $article->user->name }}
                    </div>
                    <div class="text-xs italic border-b-2 text-main-color">
                        @if ($article->user && $article->user->role)
                            {{ $article->user->role->display_name }}
                        @endif
                    </div>
                    <a href="{{ route('article.show', ['id' => $article->id]) }}">
                        <div class="mt-5 group">
                            <h2 class="text-base font-semibold text-main-color group-hover:opacity-50">
                                {{ $article->title }}
                            </h2>
                            <div class="text-xs text-pale">
                                @if ($article->created_at->diffInDays() >= 7)
                                    {{ __('messages.Publie_le') }} {{ $article->created_at->format('d/m/Y') }}
                                @else
                                    <i class="fa-solid fa-clock"></i> {{ $article->created_at->diffForHumans() }}
                                @endif

                            </div>
                            <div class="w-72 h-72 lg:w-96 lg:h-96 max-w-full group-hover:opacity-50">
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="mb-2 w-full h-full object-cover rounded-lg">
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

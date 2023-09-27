@extends('layouts.app')

@section('content')
<div class="p-4 w-full">
    <div class="flex gap-1">
        <a class="p-2 text-sm text-center bg-button hover:bg-[#727262] text-white" href="{{ route('home') }}">
            <i class="fa-solid fa-house"></i>
        </a>
        <a class="p-2 text-sm text-center bg-button hover:bg-[#727262] text-white" href="{{ route('blog') }}">
            <i class="fa-solid fa-arrow-right"></i> {{ __('messages.Blog') }}
        </a>
    </div>
    <h1 class="text-2xl font-semibold text-main-color mt-2">
        {{ $article->title }}
    </h1>
    <div class="text-sm">
        {{ $article->created_at->format('d/m/Y') }}
    </div>
    <div class="w-72 h-72 lg:w-96 lg:h-96 max-w-full group-hover:opacity-50">
        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="mb-2 w-full h-full object-cover rounded-lg">
    </div>
    <p>
        {!! $article->content !!}
    </p>
</div>
@endsection

@extends('layouts.app')

@section('header')
    @if($post->image)
        <header class="w-full pt-10 h-84 bg-cover bg-no-repeat" style="background-image: url({{ asset('storage/'.$post->image) }}">
            @include('layouts.title')
            <div class="mask mt-23"></div>
        </header>
    @else
        <header class="w-full pt-10 header-bg-color">
            @include('layouts.title')
            <div class="container pt-15 pb-15">
                <div class="m-auto flex p-6">
                    <div class="mt-3 text-white leading-loose">
                        <p class="text-2xl">{{ $post->essay }}</p>
                    </div>
                </div>
            </div>
            <div class="overlay"></div>
            <div class="mask"></div>
        </header>
    @endif
@endsection

@section('content')
<div class="flex-1">
    <div class="container m-auto mb-9 bg-white">
        <div class="flex md:flex-no-wrap flex-wrap-reverse md:p-10">
            <div class="mt-9 md:w-1/5 lg:w-2/6 hidden md:block">
                <div class="mb-8 flex flex-col">
                    <img class="w-1/2 rounded-full" src="{{ asset('images/avatar.jpg') }}">
                    <div class="pt-5 leading-normal">
                        <p class="text-sm text-black">Dullme</p>
                        <p class="text-xs text-grey">Administrator</p>
                    </div>
                    <div class="mt-6">
                        <p class="mb-3 text-grey text-sm flex items-center">
                            <img class="mr-3" src="{{ asset('svg/clock.svg') }}"/>
                            <span>{{ $post->created_at->toFormattedDateString() }}</span>
                        </p>
                        <p class="text-grey text-sm flex items-center">
                            <img class="mr-3" src="{{ asset('svg/price-tag.svg') }}"/>
                            <a href="#" class="text-green">{{ $post->category->name }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="md:w-4/5 lg:w-4/6">
                <article>
                    <h1>{{ $post->title }}</h1>
                    {!! markdown($post->content) !!}
                </article>
            </div>
        </div>
    </div>
</div>
@endsection
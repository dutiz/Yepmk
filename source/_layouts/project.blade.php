@extends('_layouts.master')

@section('body')

<div class="flex items-end"
    style="background: linear-gradient(0deg, rgba(71, 50, 136, 0.8), rgba(71, 50, 136, 0.8)), url('{{ $page->cover }}') no-repeat center center / cover; min-height: 450px;">
    <div class="container mb-16">
        <div class="row">
            <div class="col-4">
                <h1 class="font-bold text-6xl text-yellow-500">{{ $page->title }}</h1>
                <p class="font-medium text-base text-white">{{ $page->short_desc }}</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-24">
    <div class="row">
        <div class="col-5">
            <div class="md-content">
                @yield('content')
            </div>
            <h2 class="mt-8 mb-4 font-medium text-2xl text-purple-500">Donators</h2>
            <p class="font-medium text-base text-gray-500">
                @foreach($page->donators as $donator)
                {{ $donator }}
                @endforeach
            </p>
            <div class="row py-8">
                <div class="col-5">
                    <h2 class="font-medium text-2xl text-purple-500">Project start</h2>
                    <p class="pt-4 font-medium text-base text-gray-500">
                        {{ $page->start_date }}
                    </p>
                </div>
                <div class="col-5">
                    <h2 class="font-medium text-2xl text-purple-500">Project end</h2>
                    <p class="pt-4 font-medium text-base text-gray-500">
                        {{ $page->end_date }}
                    </p>
                </div>
            </div>
            <h2 class="font-medium text-2xl text-purple-500">
                Tags
            </h2>
            <div class="row pt-8 justify center">
                <div class="col-12">
                    <div class="flex flex-row items-center">
                        @foreach($page->tags as $tag)
                        <div class="bg-yellow-100 rounded-lg text-center px-3 py-1 mr-5 last:mr-0">
                            <p class="text-xs text-yellow-500 font-medium uppercase">
                                {{ $tag }}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="offset-1 col-6">
            @foreach ($page->images as $images)
            <img class="w-full h-auto mb-8 last:mb-0" src="{{ $images }}" alt="">
            @endforeach
        </div>
    </div>
</div>

@endsection
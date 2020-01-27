@extends('_layouts.master')

@section('body')
{{-- Header--}}
<div class="container mt-16">
    <div class="row items-center">
        <div class="lg:col-4">
            <h1 class="text-5xl text-purple-500 font-bold">Empowering the youth</h1>
            <p class="mt-4 text-sm">Learn more about our cause.</p>
            <a href="/about" class=" inline-block mt-8 rounded-lg bg-purple-400 text-base text-white px-6 py-3">Learn
                More</a>
        </div>
        <div class="col-7 offset-1">
            @include('_partials.home-svg')
        </div>
    </div>
</div>
{{-- Icons --}}
<div class="container">
    <div class="row justify-center mb-10 mt-20 lg:mt-40">
        <div class="lg:col-8">
            <h1 class="text-purple-500 font-bold text-2xl lg:text-5xl text-center">
                Empowering today's youth,
                building tomorow leaders !
            </h1>
        </div>
        <div class="row">
            <div class="lg:col-4 flex flex-col items-center text-center py-10 mb-10 lg:mb-0">
                <img src="/assets/images/mission.png" style="height:180px;" class="w-auto" alt="">
                <h2 class="my-4 text-purple-500 font-bold text-2xl">Mission</h2>
                <p class="text-xs">Encouraging youth empowerment and potential fulfillment through different activities
                </p>
            </div>
            <div class="lg:col-4 flex flex-col items-center text-center py-10 mb-10 lg:mb-0">
                <img src="/assets/images/vision.png" style="height:180px;" class="w-auto" alt="">
                <h2 class="my-4 text-purple-500 font-bold text-2xl">Vision</h2>
                <p class="text-xs">Intellectually Empowered Youth</p>
            </div>
            <div class="lg:col-4 flex flex-col items-center text-center py-10 mb-10 lg:mb-0">
                <img src="/assets/images/goal.png" style="height:180px;" class="w-auto" alt="">
                <h2 class="my-4 text-purple-500 font-bold text-2xl">Goal</h2>
                <p class="text-xs">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</div>
{{-- IMPACTS --}}
<div style="background: url('/assets/images/impact-bg.png') no-repeat center center; background-size: cover;">
    <div class="container py-64">
        <div class="row justify-center">
            <div class="lg:col-4 text-center">
                <h1 class="text-purple-500 font-bold text-5xl">Our Impact</h1>
                <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipsicing elit. amet <br> ad fuga volputate
                    eligendi, officia consectetur corrupti ipsam ?
                </p>
            </div>
        </div>

        <div class="row justify-center">
            <div class="col-8 mt-20">
                <div class="bg-purple-500 rounded-xl flex flex-col lg:flex-row justify-between items-center px-6 py-4">
                    <div class="flex flex-col text-center">
                        <h2 class="text-white font-bold text-6xl leading-none">20</h2>
                        <p class="text-xs text-yellow-500 font-medium">projects completed</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <h2 class="text-white font-bold text-6xl leading-none">120</h2>
                        <p class="text-xs text-yellow-500 font-medium">volunteers</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <h2 class="text-white font-bold text-6xl leading-none">400</h2>
                        <p class="text-xs text-yellow-500 font-medium">events hosted</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <h2 class="text-white font-bold text-6xl leading-none">500</h2>
                        <p class="text-xs text-yellow-500 font-medium">time wasted</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
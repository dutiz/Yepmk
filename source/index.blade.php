@extends('_layouts.master')

@section('body')
{{-- Header--}}
<div class="container">
    <div class="row items-center">
        <div class="lg:col-5 pt-32">
            <h1 class="text-5xl text-purple-500 font-bold">Empowering the youth</h1>
            <p class="mt-4 text-sm">Learn more about our cause.</p>
            <a href="/about" class=" inline-block mt-8 rounded bg-purple-400 text-base px-6 py-3 text-white">Learn
                More</a>
        </div>
        Image
    </div>
</div>
{{-- Icons --}}
<div class="container">
    <div class="row justify-center mb-10 mt-20 lg:mt-40">
        <div class="lg:col-8">
            <h1 class="text-purple-500 font-bold text-2xl lg:text-5xl text-center">
                Empowering today's youth, building
                tomorrow's leaders ! </h1>
        </div>
    </div>
    <div class="row">
        <div class="lg:col-4 flex flex-col items-center text-center py-10 mb-10 lg:mb-0">
            <img src="/assets/images/mission.png" style="height: 180px;" class="w-auto" alt="">
            <h2 class="my-4 text-purple-500 font-bold text-2xl">Mission</h2>
            <p class="text-xs">Encouraging youth empowerment and potential fulfillment through different activities</p>
        </div>
        <div class="lg:col-4 flex flex-col items-center text-center py-10 mb-10 lg:mb-0">
            <img src="/assets/images/vision.png" style="height: 180px;" class="w-auto" alt="">
            <h2 class="my-4 text-purple-500 font-bold text-2xl">Vision</h2>
            <p class="text-xs">Intellectually Empowered Youth</p>
        </div>
        <div class="lg:col-4 flex flex-col items-center text-center py-10 mb-10 lg:mb-0">
            <img src="/assets/images/goal.png" style="height: 180px;" class="w-auto" alt="">
            <h2 class="my-4 text-purple-500 font-bold text-2xl">Goal</h2>
            <p class="text-xs">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
</div>
{{-- IMPACTS --}}
<div style="background:url('/assets/images/impact-bg.png') no-repeat center center / cover;">
    <div class="container pt-48">
        <div class="row justify-center">
            <div class="lg:col-4 text-center">
                <h1 class="text-purple-500 font-bold text-5xl">Our Impact</h1>
                <p class="text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet<br> ad fuga voluptates
                    eligendi, officia consectetur corrupti ipsam?
                </p>
            </div>
        </div>
    </div>
    <div class="container pb-48">
        <div class="row justify-center">
            <div class="col-8 mt-20">
                <div class="bg-purple-500 rounded-lg flex flex-col lg:flex-row justify-between items-center px-6 py-4">
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

{{-- <div class="flex mb-48  mx-48 text-center bg-purple-500 py-8 rounded-lg ">
    <div class="col-3 ">
        <h2 class="text-white font-bold text-6xl ">20</h2>
        <p class="text-xs text-yellow-500 font-medium">projects completed</p>
    </div>
    <div class="col-3 ">
        <h2 class="text-white font-bold text-6xl">120</h2>
        <p class="text-xs text-yellow-500 font-medium">volunteers</p>
    </div>
    <div class="col-3 ">
        <h2 class="text-white font-bold text-6xl">400</h2>
        <p class="text-xs text-yellow-500 font-medium">events hosted</p>
    </div>
    <div class="col-3 ">
        <h2 class=" text-white font-bold text-6xl">500</h2>
        <p class="text-xs text-yellow-500 font-medium">hours wasted</p>
    </div>
</div> --}}
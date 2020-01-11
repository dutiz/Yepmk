@extends('_layouts.master')

@section('body')
{{-- Header--}}
<div class="container">
    <div class="row items-center">
        <div class="lg:col-5 pt-32">
            <h1 class="text-5xl text-purple-500 font-bold">Empowering the youth</h1>
            <p class="mt-4 text-sm">Learn more about our cause.</p>
            <a href="/about" class=" inline-block mt-8 rounded bg-purple-400 text-base px-6 py-3">Learn More</a>
        </div>
        Image
    </div>
</div>
{{-- Icons --}}
<div class="container">
    <div class="mt-40">
        <h1 class="text-purple-500 font-bold text-5xl text-center px-40">Empowering today's youth, building tomorrow's
            leaders ! </h1>
    </div>
    <div class="row mb-4 mt-10 text-center">
        <div class="col-4">
            <img src="/assets/images/mission.png" class="px-20" alt="">
            <h2 class="my-4 text-purple-500 font-bold text-2xl">Mission</h2>
            <p class="text-xs">Encouraging youth empowerment and potential fulfillment through different activities</p>
        </div>
        <div class="col-4">
            <img src="/assets/images/vision.png" class="px-20" alt="">
            <h2 class="my-4 text-purple-500 font-bold text-2xl">Vision</h2>
            <p class="text-xs">Intellectually Empowered Youth</p>
        </div>
        <div class="col-4">
            <img src="/assets/images/goal.png" class="px-20" alt="">
            <h2 class="my-4 text-purple-500 font-bold text-2xl">Goal</h2>
            <p class="text-xs">Lorem ipsum dolor sit amet.</p>
        </div>
    </div>
</div>
{{-- IMPACTS --}}
<div class="mt-48 container">
    <h1 class="text-purple-500 font-bold text-5xl text-center">Our Impact</h1>
    <p class=" text-xs  text-center block">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet<br> ad fuga
        voluptates eligendi, officia consectetur corrupti ipsam?</p>
</div>
<div class="container ">

    <div class="flex mb-48 mt-20 mx-48 text-center bg-purple-500 py-8 rounded-lg ">
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
    </div>
</div>
</div>
@endsection
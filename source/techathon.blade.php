@extends('_layouts.master')

@section('body')

<div style="background:url('/assets/images/techathon-bg.png') no-repeat center center / cover;">
    <div class="container pt-64 pb-16">
        <div class="row">
            <div class="col-4">
                <h1 class="font-bold text-6xl text-yellow-500">Techathon</h1>
                <p class="font-medium text-base text-white">Free computer coding classes</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-24">
    <div class="row">
        <div class="col-5 ">
            <p class="font-medium text-base text-justify">
                Techathon is an annual hacking competition, hosted for the first time during the year 2019 in
                partnership with the United Nations Development Program (UNDP). The competition is the culmination of
                the TechUP project, and it allows high school students to showcase their programming skills. Teams of
                high school students compete against each other (and the clock) to solve a tech-oriented problem, and
                they only have 30 hours to propose a solution. At the end of the working period, all of the teams
                present their findings/solution to a panel of community members. The panel reviews and assess the
                presentations, and they choose the winner based on their solutions. 44 students competed and 11 new
                ideas were presented, with 3 winners getting the prizes.
            </p>
            <h2 class="mt-8 mb-4 font-medium text-2xl text-purple-500">Donators</h2>
            <p class="font-medium text-base text-gray-500">European Union, UNDP, Municipality of Gostivar</p>
            <div class="row py-8">
                <div class="col-5">
                    <h2 class="font-medium text-2xl text-purple-500">Project start</h2>
                    <p class="pt-4 font-medium text-base text-gray-500">20 september 2019</p>
                </div>
                <div class="col-5">
                    <h2 class="font-medium text-2xl text-purple-500">Project end</h2>
                    <p class="pt-4 font-medium text-base text-gray-500">20 september 2019</p>

                </div>
            </div>
            <h2 class="font-medium text-2xl text-purple-500">
                Tags
            </h2>
            <div class="row pt-8 justify center">
                <div class="col-3">
                    <div class="bg-yellow-300 rounded-lg flex flex-col lg:text-center px-3 py-1">
                        <div class="flex flex-col text-center">
                            <p class="text-xs text-yellow-500 font-medium">YOUTH</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-yellow-300 rounded-lg flex flex-col lg:text-center px-3 py-1">
                        <div class="flex flex-col text-center">
                            <p class="text-xs text-yellow-500 font-medium">EMPOYABILITY</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="bg-yellow-300 rounded-lg flex flex-col lg:text-center px-3 py-1">
                        <div class="flex flex-col text-center">
                            <p class="text-xs text-yellow-500 font-medium">NETWORK</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-7 flex flex-col items-end">
            <img src="/assets/images/techathon-img1.png" alt="img1">
            <img class="py-8" src="/assets/images/techathon-img2.png" alt="img2">
            <img class="pb-24" src="/assets/images/techathon-img3.png" alt="img3">
        </div>
    </div>
</div>

@endsection
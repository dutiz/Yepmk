@extends('_layouts.master')

@section('body')

<div class="container">
    <div class="row items-center mb-20">
        <div class="lg:col-4 ">
            <h1 class="text-5xl text-purple-500 font-bold">Our projects</h1>
            <p class="lg:mt-4 text-sm text-medium">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Urna odio tristique eget sed. At nunc, velit
                integer id aliquam ultrices suspendisse aliquet.
                <br><br>
                Condimentum elit nulla cras in feugiat proin faucibus. Odio leo turpis facilisis praesent. Adipiscing
                quam facilisis magnis elit. Velit orci gravida egestas odio at duis nec cras.</p>
        </div>
        <div class="col-8 flex justify-end">
           <img src="/assets/images/projects-img.png" alt="">
        </div>
    </div>
</div>
<div class="container my-48">
    <div class="row">
        <div class="col-4">
            <img src="/assets/images/techup.png" alt="techup">
            <h1 class="pt-8 pl-8 font-bold text-2xl text-yellow-500 bg-purple-500">Techup</h1>
            <p class="pt-2 pb-8 pl-8 font-medium text-base text-white bg-purple-500">Free computer coding classes</p>
        </div>
        <div style="background:url('/assets/images/youth-guarantee.png') no-repeat center center / cover" class="col-4">
            <h1 class="font-bold text-2xl text-yellow-500">Youth Guarantee </h1>
            <p class="font-medium text-base text-white">Free computer coding classes </p>
        </div>
        <div class="col-4 bg-purple-500">
            <img src="/assets/images/techathon.png" alt="">
            <h1 class="pt-8 pl-8 font-bold text-2xl text-yellow-500">Techathon</h1>
            <p class="pt-2 pb-8 pl-8 font-medium text-base text-white">Free computer coding classes </p>
        </div>
    </div>
</div>
@endsection
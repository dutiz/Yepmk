@extends('_layouts.master')

@section('body')

<div class="container">
    <div class="row items-center mb-20">
        <div class="lg:col-4 ">
            <h1 class="text-6xl text-purple-500 font-bold">Feel free to contact us</h1>

        </div>
        <div class="col-8 flex justify-end">
            <img src="/assets/images/contact-img.png" alt="">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h2 class="font-bold text-5xl text-purple-500">Our office </h2>
                <img src="/assets/images/location-img.png" alt="location">

                <p class="py-8 font-medium text-gray-500 text-sm"> Major Cede Filiposki 158, Gostivar 1230,
                    <br> Republic of N. Macedonia
                </p>

                <img src="/assets/images/clock-img.png" alt="location">

                <p class="py-8 font-medium text-gray-500 text-sm"> Major Cede Filiposki 158, Gostivar 1230,
                    <br> Republic of N. Macedonia
                </p>

                <img src="/assets/images/mail-img.png" alt="location">

                <p class="py-8 font-medium text-gray-500 text-sm"> Major Cede Filiposki 158, Gostivar 1230,
                    <br> Republic of N. Macedonia
                </p>
            </div>
            <div class="row col-7 bg-purple-500 rounded-xl justify-end ">
                <h2 class="pb-6 pt-16 pl-16 font-bold text-2xl text-yellow-500">Send us a message</h2>
                <input class="mb-6 ml-16 bg-purple-400 text-purple-500 font-medium text-xs py-4 pl-4" style="width: 517px;" type="text" placeholder="Name" name="name"/>
                <input class="mb-6 ml-16 bg-purple-400 text-purple-500 font-medium text-xs py-4 pl-4" style="width: 517px;" type="text" placeholder="Subject" name="subject"/>
                <input class="mb-6 ml-16 bg-purple-400 text-purple-500 font-medium text-xs py-4 pl-4" style="width: 517px;" type="text" placeholder="E-Mail" name="email"/>
                <textarea class="mb-6 ml-16 bg-purple-400 text-purple-500 font-medium text-xs py-4 pl-4" name="subject" placeholder="Message" style="width: 517px; height: 190px"></textarea>
                <button type="submit" value="submit" class="mb-16 ml-16 px-8 py-4 inline-block bg-yellow-500 text-base text-black">Send Message
            </div>
        </div>
    </div>

    @endsection
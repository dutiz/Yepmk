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
    <div class="row justify-between">
        <div class="col-4">
            <h2 class="font-bold text-5xl text-purple-500">Our office </h2>

            <div class="flex flex-row items-center">
                <img src="/assets/images/location-img.png" alt="location">
                <p class="py-8 font-medium text-gray-500 text-sm ml-5"> Major Cede Filiposki 158, Gostivar 1230,
                    <br> Republic of N. Macedonia
                </p>
            </div>

            <div class="flex flex-row items-center">
                <img src="/assets/images/clock-img.png" alt="location">
                <p class="py-8 font-medium text-gray-500 text-sm ml-5"> Major Cede Filiposki 158, Gostivar 1230,
                    <br> Republic of N. Macedonia
                </p>
            </div>

            <div class="flex flex-row items-center">
                <img src="/assets/images/mail-img.png" alt="location">
                <p class="py-8 font-medium text-gray-500 text-sm ml-5"> Major Cede Filiposki 158, Gostivar 1230,
                    <br> Republic of N. Macedonia
                </p>
            </div>
        </div>
        <div class="col-7">
            <div class="bg-purple-500 rounded-xl">
                <div class="flex flex-col justify-center px-16">
                    <h2 class="mb-6 mt-16 font-bold text-2xl text-yellow-500">Send us a message</h2>
                    <input
                        class="mb-6 bg-purple-400 placeholder-purple-500 text-purple-500 font-medium text-xs py-4 pl-4"
                        type="text" placeholder="Name" name="name" />
                    <input class="mb-6 bg-purple-400 placeholder-purple-500 text-purple-500 font-medium text-xs py-4 pl-4" type="text"
                        placeholder="Subject" name="subject" />
                    <input class="mb-6 bg-purple-400 placeholder-purple-500 text-purple-500 font-medium text-xs py-4 pl-4" type="text"
                        placeholder="E-Mail" name="email" />
                    <textarea class="mb-6 bg-purple-400 text-purple-500 placeholder-purple-500 font-medium text-xs py-4 pl-4" name="subject"
                        placeholder="Message"></textarea>
                    <button type="submit" value="submit"
                        class="mb-16 px-8 py-4 inline-block placeholder-purple-500 bg-yellow-500 text-base text-black">Send
                        Message</button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
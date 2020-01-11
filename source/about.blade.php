@extends('_layouts.master')

@section('body')

<div class="container">
    <div class="row items-center">
        <div class="lg:col-4 pt-32">
            <h1 class="text-5xl text-purple-500 font-bold">A few words about us</h1>
            <p class="lg:mt-4 text-sm text-medium">
                Youth Empowerment Platform (YEP) is a youth-orientated non-governmental
                organization, located in Gostivar.<br>
                <br>
                YEP was founded on April 24, 2015 by a group of enthusiastic young people who believe in amplifying the
                voices of young people and serving their communities. </p>
        </div>
        <div class="col-7">

            Image
        </div>
    </div>
</div>
<div class="container mb-48">
    <div class="row mt-24">
        <div class="col-6">
            <h1 class="text-5xl text-purple-500 font-bold">Long Term Goal</h1>
            <p class="my-6 font-medium text-base">The Youth Empowerment Platform’s long-term goals include:</p>
            <p class="font-medium text-sm mt-6">
                Inspiring young people to take an active role in their futures, and teaching them that their voices are
                strong and vital to the decision-making process; and
            </p>
            <img src="/assets/images/tick.png" alt="">
            <p class="font-medium text-sm mt-6">
                Supporting the youth group with their leadership skills, strengthening their civic engagement, and
                ensuring they have the proper skills to thrive in their futures—not only will this aid young people in
                becoming leaders in their communities, but also inspire their peers to be more active members of
                society.
            </p>
        </div>
        <div class="col-6">
            <h1 class="text-5xl text-purple-500 font-bold">Our Impact</h1>
            <p class="my-6 font-medium text-base">The Youth Empowerment Platform has been active for four years, and
                during this time, more than 50 activists have supported the mission and goals. Currently, there are nine
                different programs/projects our members participate in or lead. These programs include the following:
                Say It, TechUp, Film It, YEP Talks, My Future, Techathon, Gostronic, and My City, My Pride. Through
                these programs, YEP has supported over 450 young people by assisting them with obtaining various
                technical skills, providing mentorship, and fostering their activism. In addition to the regularly
                scheduled projects, YEP holds informal activities — like movie nights or group hikes — for the members.
                During the academic year 2018-2019, approximately 200 people from Gostivar have attended these events.
                Not only are these events a way for members to develop their skills and knowledge, but they also serve
                as a networking event.
            </p>
        </div>
    </div>
</div>

<div style="background: url('/assets/images/members-bg.png') no-repeat center center / cover;">
    <div class="container">
        <div class="row justify-end">
            <div class="col-4 my-32">
                <div class="bg-purple-500 rounded-xl p-10">
                    <h2 class="font-bold text-3xl text-yellow-500">
                        Our Members
                    </h2>
                    <p class="font-medium text-sm text-white text-justify">
                        YEP’s active members consist of more than 30 youth, mainly between the ages of 14 and 18. There
                        are
                        also some more experienced members, between the ages of 23 and 29. Our members are passionate
                        about
                        serving their communities, learning from each other, and building their experiences. While the
                        president is available to guide and mentor YEP members, it’s the members who take the lead on
                        projects. Members meet once a week to discuss the projects they’d like to design and implement,
                        and
                        the president is there to facilitate the meetings and provide any support they may need. The
                        task of
                        the president is to act as a moderator during the meeting, and never as a lawgiver. This ensures
                        that the members are actively involved during the discussions at the meetings.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-48 container">
    <h1 class="text-purple-500 font-bold text-5xl text-center">Our Sponsors</h1>
</div>
<div class="container">

    <div class="lg: row mb-48 mt-20 justify-between">
        <div class="col-1 ">
            <img src="/assets/images/komuna.png" alt="komuna">
        </div>
        <div class="col-2 ">
            <img src="/assets/images/usembskopje.png" alt="usembskopje">
        </div>
        <div class="col-3 ">
            <img src="/assets/images/peacecorps.png" alt="peacecorps">
        </div>
        <div class="col-5 ">
            <img src="/assets/images/usaid.png" alt="usaid">
        </div>
    </div>
</div>

@endsection
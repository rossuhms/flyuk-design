@extends('layouts.flyuk')
@section('homepage-additional')
    @include('layouts.components.homepage.image-slides')
@endsection
@section('main-content')
<div class="container mx-auto mt-6">
    <div class="flex flex-col md:flex-row lg:flex-row xl:flex-row">
        <div class="w-3/5 mr-4">
            <h1 class="font-light">Latest News</h1>
            <div class="news-item border-b border-dashed border-grey">
                <div class="w-auto">
                    <img src="https://flyuk.aero/en/images/menu_images/topa.png" alt="">
                </div>
                <div class="meta-data">
                    <a href="" class="block text-lg text-blue-darker">Topa Sky Launch</a>
                    <span class="date">
                        01, Nov 2017 -
                    </span>
                    <span class="summary">
                        Time to explore Oceania and the South Pacific
                    </span>
                </div>
            </div>
            <div class="news-item border-b border-dashed border-grey">
                <div class="w-auto">
                    <img src="https://flyuk.aero/en/images/menu_images/mainstream.png" alt="">
                </div>
                <div class="meta-data">
                    <a href="" class="block text-lg text-blue-darker">Bombardier CRJ700 now avaliable</a>
                    <span class="date">
                        16, Oct 2017 -
                    </span>
                    <span class="summary">
                        The CRJ700 joins the fleet
                    </span>
                </div>
            </div>
            <div class="news-item border-b border-dashed border-grey">
                <div class="w-auto">
                    <img src="https://flyuk.aero/en/images/menu_images/hc.png" alt="">
                </div>
                <div class="meta-data">
                    <a href="" class="block text-lg text-blue-darker">B1900D Delivery Flights</a>
                    <span class="date">
                        07, Oct 2017 -
                    </span>
                    <span class="summary">
                        Changes to the Highland Connect Fleet
                    </span>
                </div>
            </div>
        </div>
        <div class="w-2/5">
            <h1 class="font-light">Today's Statistics</h1>
            <div class="flex flex-row pt-4">
                <div class="w-1/2 mx-8 bg-grey-dark text-white text-center p-4">
                    <span class="block text-sm">Total Hours</span>
                    <span class="block text-3xl pt-4">90:43</span>
                </div>
                <div class="w-1/2 mx-8 bg-grey-dark text-white text-center p-4">
                    <span class="block text-sm">Total PIREPs</span>
                    <span class="block text-3xl pt-4">61</span>
                </div>
            </div>
            <div class="flex flex-row mt-6">
                <div class="w-1/2 mx-8 bg-grey-dark text-white text-center p-4">
                    <span class="block text-sm">Unique PIlots</span>
                    <span class="block text-3xl pt-4">42</span>
                </div>
                <div class="w-1/2 mx-8 bg-grey-dark text-white text-center p-4">
                     <span class="block text-sm">New Members</span>
                    <span class="block text-3xl pt-4">4</span>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / end of latest news & statistics -->
<div class="w-full bg-grey-light my-16">
    <div class="container mx-auto py-8" style="height: 400px">
        <div class="w-full">
            <h1 class="font-light">Upcoming Online Events</h1>
            <div class="homepage-events-carousel owl-carousel owl-theme flex flex-row items-center justify-center mt-4">
                <div class="flex flex-col mx-1">
                    <div class="block bg-white p-2">
                        <img src="https://flyuk.aero/en/images/events/1322544388RometoSamos.jpg" class="fillContainer" alt="Rome to Samos">
                    </div>
                    <div class="block bg-white p-2 mt-2">
                        Thu, 16th Nov 2017 at 1400z - VATSIM
                    </div>
                </div>
                <div class="flex flex-col mx-1">
                    <div class="block bg-white p-2">
                        <img src="https://flyuk.aero/en/images/events/316029328Naples.jpg" class="fillContainer" alt="Rome to Samos">
                    </div>
                    <div class="block bg-white p-2 mt-2">
                        Thu, 16th Nov 2017 at 1400z - VATSIM
                    </div>
                </div>
                <div class="flex flex-col mx-1">
                    <div class="block bg-white p-2">
                        <img src="https://flyuk.aero/en/images/events/1290160013Edinburgh%20to%20Jersey.jpg" class="fillContainer" alt="Rome to Samos">
                    </div>
                    <div class="block bg-white p-2 mt-2">
                        Thu, 16th Nov 2017 at 1400z - VATSIM
                    </div>
                </div>
                <div class="flex flex-col mx-1">
                    <div class="block bg-white p-2">
                        <img src="https://flyuk.aero/en/images/events/1595678697Thailand.jpg" class="fillContainer" alt="Rome to Samos">
                    </div>
                    <div class="block bg-white p-2 mt-2">
                        Thu, 16th Nov 2017 at 1400z - VATSIM
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- / end of upcomfing online events -->
@endsection

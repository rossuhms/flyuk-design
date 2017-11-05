<nav role="main-navigation" class="grey-gradient w-full h-12 text-sm">
    <label class="block md:hidden cursor-pointer">
        @include('svg.menu', ['class' => 'absolute pin-r pt-3 mr-2 w-6 text-blue-primary z-60'])
        <input id="toggle-mobile-menu" type="checkbox" class="hidden toggle-mobile-menu">
    </label>
    <div class="container px-8 mx-auto relative">
        <div class="main-navigation hidden sm:hidden md:flex md:flex-row" id="main-navigation">
            <div class="nav-item">
                <a href="https://flyuk-design.dev">Home</a>
            </div>
            <div class="nav-item-small">
                <a href="https://flyuk-design.dev">About Us <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="">About Fly UK</a></li>
                    <li><a href="">History &amp; Milestones</a></li>
                    <li><a href="">News &amp; Media</a></li>
                    <li><a href="">Staff Team</a></li>
                </ul>
            </div>
            <div class="nav-item-large">
                <a href="#">Operations <b class="caret"></b></a>
                <div class="dropdown-menu w-full absolute">
                    <div class="flex">
                        <div class="flex flex-wrap md:w-3/4 px-4">
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/mainstream.png" class="fit">
                                    <span>Mainstream</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/fly2.png" class="fit">
                                    <span>FLY2</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/hc.png" class="fit">
                                    <span>Highland Connect</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/ns.png" class="fit">
                                    <span>Nordic Sky</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/topa_ops.png" class="fit">
                                    <span>Topa Sky</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/codeshare.png" class="fit">
                                    <span>Codeshare</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/cargo.png" class="fit">
                                    <span>Cargo</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/tours.png" class="fit">
                                    <span>Tours</span>
                                </a>
                            </div>
                            <div class="flex-none w-32 h-32 m-4 p-1 bg-grey-lighter border border-grey-light shadow text-center rounded hover:border-blue-light">
                                <a href="#">
                                    <img src="https://flyuk.aero/en/images/menu_images/fc.png" class="fit">
                                    <span>Flying Club</span>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col md:w-1/4 p-4">
                            <div class="rounded border border-grey-light p-1 hover:border-blue-light cursor-pointer mb-4">
                                <div class="flex-none p-2 rounded bg-grey-lighter text-center">
                                    Flight Search
                                </div>
                            </div>
                            <div class="rounded border border-grey-light p-1 hover:border-blue-light cursor-pointer mb-4">
                                <div class="flex-none p-2 rounded bg-grey-lighter text-center">
                                    Flight Operations
                                </div>
                            </div>
                            <div class="rounded border border-grey-light p-1 hover:border-blue-light cursor-pointer mb-4">
                                <div class="flex-none p-2 rounded bg-grey-lighter text-center">
                                    Fleet Centre
                                </div>
                            </div>
                            <div class="rounded border border-grey-light p-1 hover:border-blue-light cursor-pointer mb-4">
                                <div class="flex-none p-2 rounded bg-grey-lighter text-center">
                                    Flight Planning
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item-small">
                <a href="https://flyuk-design.dev">Crew Centre <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="">Crew Page</a></li>
                    <li><a href="">Booked Flights</a></li>
                    <li><a href="">Logbook</a></li>
                    <li><a href="">Message Centre</a></li>
                    <li><a href="">My Controls</a></li>
                    <li><a href="">Pilot Handbook &amp; SOP</a></li>
                    <li><a href="">SkyTrack &amp; Downloads</a></li>
                </ul>
            </div>
            <div class="nav-item-small">
                <a href="https://flyuk-design.dev">Online Flying &amp; Events <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="">Online Events</a></li>
                    <li><a href="">Online Flying</a></li>
                </ul>
            </div>
            <div class="nav-item-small">
                <a href="https://flyuk-design.dev">Community <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="">Forums</a></li>
                    <li><a href="">Screenshots &amp; Videos</a></li>
                    <li><a href="">Teamspeak</a></li>
                    <li><a href="">Pilot Rosters</a></li>
                    <li><a href="">Offers &amp; Discounts</a></li>
                    <li><a href="">Real World Events</a></li>
                </ul>
            </div>
            <div class="nav-item-small">
                <a href="https://flyuk-design.dev">Training Academy <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="">Courses &amp; Documents</a></li>
                    <li><a href="">Help &amp; Support Forum</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

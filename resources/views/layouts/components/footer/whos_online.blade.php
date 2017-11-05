<div class="w-full bg-grey-dark text-white mt-12">
    <div class="container mx-auto py-8">
        <div class="flex flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row items-center text-center">
            <div class="flex mr-16">
                <h1 class="font-light text-2xl">Who's Online</h1>
            </div>
            <div class="whos-online-source">
                <span class="block">
                    @include('svg.radar', ['class' => 'text-white w-3'])
                    Teamspeak
                </span>
                <span class="text-3xl">1</span>
            </div>
            <div class="whos-online-source">
                <span class="block">
                    @include('svg.radar', ['class' => 'text-white w-3'])
                    SkyTrack
                </span>
                <span class="text-3xl">23</span>
            </div>
            <div class="whos-online-source">
                <span class="block">
                    @include('svg.radar', ['class' => 'text-white w-3'])
                    IVAO
                </span>
                <span class="text-3xl">1</span>
            </div>
            <div class="whos-online-source">
                <span class="block">
                    @include('svg.radar', ['class' => 'text-white w-3'])
                    VATSIM
                </span>
                <span class="text-3xl">2</span>
            </div>
            <div class="whos-online-source">
                <span class="block">
                    @include('svg.radar', ['class' => 'text-white w-3'])
                    FSD Server
                </span>
                <span class="text-3xl">0</span>
            </div>
        </div>
    </div>
</div>

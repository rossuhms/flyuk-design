@extends('pages.flight_dispatch.layout')
@section('flight-dispatch-content'
<div class="flex flex-col">
    <div class="flex-1 mr-2 mb-2">
        <h2 class="font-light">Departure - Edinburgh</h2>
    </div>
    <div class="flex-1 mr-2 mb-2 mt-4">
        <h3 class="font-light">Airport Information</h3>
    </div>
</div>
<div class="flex flex-row mt-2">
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">icao</label>
        <div class="bg-grey-lightest p-2">EGPH</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">iata</label>
        <div class="bg-grey-lightest p-2 uppercase">EDI</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">elevation</label>
        <div class="bg-grey-lightest p-2">136 ft</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">recommended alternate</label>
        <div class="bg-grey-lightest p-2">EGPF - Glasgow</div>
    </div>
</div>
<!-- stand allocation -->
<div class="flex flex-col mt-8">
    <div class="flex-1 mr-2 mb-2">
        <h3 class="font-light">Stand Allocation</h3>
    </div>
</div>
<div class="flex flex-row mt-2">
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">domestic</label>
        <div class="bg-grey-lightest p-2">19 - 24</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">highland connect</label>
        <div class="bg-grey-lightest p-2 uppercase">101 - 104</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">european / worldwide</label>
        <div class="bg-grey-lightest p-2">4 - 10</div>
    </div>
</div>

<!-- charts -->
<div class="flex flex-col mt-8">
    <div class="flex-1 mr-2 mb-2">
        <h3 class="font-light">Charts</h3>
    </div>
</div>
<div class="flex flex-row mt-2">
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">NATS</label>
        <div class="bg-grey-lightest p-2">
            <a href="http://www.nats-uk.ead-it.com/public/index.php%3Foption=com_content&task=blogcategory&id=62&Itemid=111.html" target="_blank noreferrer noopener">
                Click to view NATS Edinburgh Charts
            </a>
        </div>
    </div>
</div>

<!-- NOTAMS -->
<div class="flex flex-col mt-8">
    <div class="flex-1 mr-2 mb-2">
        <h3 class="font-light">NOTAMs</h3>
    </div>
</div>
<div class="flex flex-row mt-2">
    <div class="flex-1 md:w-1/4 mr-2">
        <div class="bg-grey-lightest p-2">
            No NOTAM available.
        </div>
    </div>
</div>
@endsection

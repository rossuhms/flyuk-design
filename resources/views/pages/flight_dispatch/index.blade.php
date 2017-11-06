@extends('pages.flight_dispatch.layout')
@section('flight-dispatch-content')
<div class="flex flex-col">
    <div class="flex-1 md:w-1/4 mr-2 mb-2">
        <h2 class="font-light">Booking</h2>
    </div>
</div>
<div class="flex flex-row mt-2">
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">flight number</label>
        <div class="bg-grey-lightest p-2">FL1234</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">callsign</label>
        <div class="bg-grey-lightest p-2 uppercase">skyways 12j</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">departure time</label>
        <div class="bg-grey-lightest p-2">1830z / 1HR 03M</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">arrival time</label>
        <div class="bg-grey-lightest p-2">1945z / 2HR 19M</div>
    </div>
</div>
<div class="flex flex-row mt-4">
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">departure</label>
        <div class="bg-grey-lightest p-2">EGPH / EDI - Edinburgh International</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">arrival</label>
        <div class="bg-grey-lightest p-2 uppercase">EGLL / LHR - London Heathrow</div>
    </div>
</div>
<div class="flex flex-row mt-4">
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">flight type</label>
        <div class="bg-grey-lightest p-2">SCHEDULED</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">flight division</label>
        <div class="bg-grey-lightest p-2 uppercase">fly2</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">aircraft</label>
        <div class="bg-grey-lightest p-2 uppercase">boeing 737-800</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">network</label>
        <div class="bg-grey-lightest p-2">VATSIM</div>
    </div>
</div>
<div class="flex flex-col mt-8">
    <div class="flex-1 md:w-1/4 mr-2 mb-2">
        <h2 class="font-light">Route</h2>
    </div>
    <div class="flex-1 mt-4">
        <div class="flex items-center justify-center w-full h-64 bg-grey-lightest">
            map overview of route
        </div>
    </div>
</div>
@endsection
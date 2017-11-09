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
        <div class="bg-grey-lightest p-2">FL142</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">callsign</label>
        <div class="bg-grey-lightest p-2 uppercase">skyways 8BL</div>
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
        <div class="bg-grey-lightest p-2">DOMESTIC</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">flight division</label>
        <div class="bg-grey-lightest p-2 uppercase">SCHEDULED</div>
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
            a fancy map with a line from departure to destination airports
        </div>
    </div>
    <div class="flex-1 mt-4">
        <button class="btn btn-grey btn-full">Dispatch</button>
        <button class="btn btn-primary">Dispatch</button>
        <button class="btn btn-primary-outline">Dispatch</button>
        <button class="btn btn-grey-outline float-right">Dispatch</button>
    </div>
    <div class="flex-1 mt-4 w-64">
        <label class="label" for="username">
            Username
        </label>
        <input class="input" id="username" type="text" placeholder="Username">
        <div class="select-dropdown mt-4">
            <select class="dropdown">
                   <option>Really long option that will likely overlap the chevron</option>
                   <option>Option 2</option>
                   <option>Option 3</option>
            </select>
            <div class="arrow">
                @include('svg.select-arrow')
            </div>
        </div>
    </div>
</div>
@endsection

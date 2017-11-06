@extends('pages.flight_dispatch.layout')
@section('flight-dispatch-content')
<div class="flex flex-col">
    <div class="flex-1 mr-2 mb-2">
        <h2 class="font-light">Aircraft</h2>
    </div>
</div>
<div class="flex flex-row mt-2">
    <div class="flex-none w-full justify-center">
        <img src="https://flyuk.aero/en/images/fleet/738.png" class="w-64" alt="">
    </div>
</div>
<div class="flex flex-row mt-2">
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">type</label>
        <div class="bg-grey-lightest p-2">BOEING 737-800</div>
    </div>
    <div class="flex-1 md:w-1/4 mr-2">
        <label class="block text-grey-dark text-sm font-light mb-2 uppercase">registration</label>
        <div class="bg-grey-lightest p-2">G-FLDE</div>
    </div>
</div>
@endsection

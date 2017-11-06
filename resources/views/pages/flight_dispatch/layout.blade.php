@extends('layouts.flyuk')
@section('main-content')
<div class="container mx-auto mt-6">
    <h1 class="font-light">
        <span>Dispatch</span>
        <span class="text-blue-primary font-medium">FL1234</span>
    </h1>
    <div class="w-full flex flex-row mt-6">
        <div class="w-1/4 flex flex-col">
            <div class="mt-2">
                <a href="{{ route('flight.dispatch.overview') }}" class="text-grey-dark {{ isActiveRoute('flight.dispatch.overview') }}">Flight Overview</a>
            </div>
            <div class="mt-6">
                <a href="" class="text-grey-dark">Route</a>
            </div>
            <div class="mt-6">
                <a href="{{ route('flight.dispatch.departure') }}" class="text-grey-dark {{ isActiveRoute('flight.dispatch.departure') }}">Departure - Edinburgh</a>
            </div>
            <div class="mt-6">
                <a href="" class="text-grey-dark">Arrival - London Heathrow</a>
            </div>
            <div class="mt-6">
                <a href="" class="text-grey-dark">Load</a>
            </div>
        </div>
        <div class="w-3/4 flex-1">
            @yield('flight-dispatch-content')
        </div>
    </div>
</div>
@endsection

@extends('layouts.flyuk')
@section('main-content')
<div class="container mx-auto mt-6">
    <div class="flex flex-row justify-center">
        <div class="w-full mt-8">
            <h1 class="font-light mb-8">Flight Search Results</h1>
            <div class="bg-grey-lighter border border-grey-light text-grey-dark font-light p-4 w-full rounded mb-6">
                We have found 3 flights that match your search criteria.
            </div>
            <table class="table table-striped table-hover text-grey-darkest text-sm text-center">
                    <thead>
                        <tr>
                            <th>Flight</th>
                            <th>Departing</th>
                            <th>Duration</th>
                            <th>Arriving</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                            <th>Aircraft</th>
                            <th>Type</th>
                            <th>Book</th>
                        </tr>
                    </thead><tbody><tr>
                                <td><a href="" data-toggle="modal" data-target="#flightModal" data-flight="69698">FL114</a></td>
                                <td><strong>EGPH</strong> (0810z)<br />Edinburgh</td>
                                <td>01:25</td>
                                <td><strong>EGLL</strong> (0935z)<br />London</td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td>B763</td>
                                <td>Schedule</td>
                                <td>
                                    <a href="#" class="align-middle p-2 px-3 bg-grey-darker border border-grey-darkest hover:bg-grey-darkest hover:border-grey-darker  text-white rounded">Book</a>
                                </td>
                            </tr><tr>
                                <td><a href="" data-toggle="modal" data-target="#flightModal" data-flight="69882">FL142</a></td>
                                <td><strong>EGPH</strong> (1710z)<br />Edinburgh</td>
                                <td>01:20</td>
                                <td><strong>EGLL</strong> (1830z)<br />London</td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td>B738</td>
                                <td>Schedule</td>
                                <td>
                                    <a href="#" class="align-middle p-2 px-3 bg-grey-darker border border-grey-darkest hover:bg-grey-darkest hover:border-grey-darker  text-white rounded">Book</a>
                                </td>
                            </tr><tr>
                                <td><a href="" data-toggle="modal" data-target="#flightModal" data-flight="69922">FL148</a></td>
                                <td><strong>EGPH</strong> (1330z)<br />Edinburgh</td>
                                <td>01:20</td>
                                <td><strong>EGLL</strong> (1450z)<br />London</td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td><img src="https://flyuk.aero/en/images/icons/fly.png" alt="Fly Icon" /></td>
                                <td>B738</td>
                                <td>Schedule</td>
                                <td>
                                    <a href="#" class="align-middle p-2 px-3 bg-grey-darker border border-grey-darkest hover:bg-grey-darkest hover:border-grey-darker  text-white rounded">Book</a>
                                </td>
                            </tr></tbody></table>
        </div>
    </div>
</div>
@endsection

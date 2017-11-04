@extends('layouts.flyuk')
@section('main-content')
<div class="container">
	<div class="row">
		<p>Homepage Carouel</p>
	</div>
</div>

<div class="banner_home_joinus">
	<div class="container">
		<p><strong>Ready to fly?</strong> - Scheduled, Cargo, Charter, FLY2, Highland Connection, Codeshare or Tours? The choice is yours!</p>
	</div>
</div>

<div class="container home-news-stats spacer">

<div class="row">



		<div class="col-md-8">
			<h1>Latest News</h1>
			<div class="media news-item">
  <div class="media-left">
    <a href="index.php?page=press_release&amp;id=907">
      <img class="media-object" style="width: 65px; height: 50px;" src="https://flyuk.aero/en/images/menu_images/topa.png" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="index.php?page=press_release&amp;id=907" title="Read More...">Topa Sky Launch</a></h4>
    01,  Nov 2017 - Time to explore Oceania and the South Pacific
  </div>
</div><div class="media news-item">
  <div class="media-left">
    <a href="index.php?page=press_release&amp;id=906">
      <img class="media-object" style="width: 65px; height: 50px;" src="https://flyuk.aero/en/images/menu_images/mainstream.png" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="index.php?page=press_release&amp;id=906" title="Read More...">Bombardier CRJ700 now avaliable</a></h4>
    16,  Oct 2017 - The CRJ700 joins the fleet
  </div>
</div><div class="media news-item">
  <div class="media-left">
    <a href="index.php?page=press_release&amp;id=905">
      <img class="media-object" style="width: 65px; height: 50px;" src="https://flyuk.aero/en/images/menu_images/hc.png" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="index.php?page=press_release&amp;id=905" title="Read More...">B1900D Delivery Flights</a></h4>
    07,  Oct 2017 - Changes to the Highland Connect Fleet
  </div>
</div>		</div>

		
		<div class="col-md-4">
			<h1>Today's Statistics</h1>

			<div class="row">
				<div class="col-md-6 col-sm-6">
					<a href="index.php?page=flight_operations#report" class="home-stat">
						<p>Total Hours</p>
						<span style="font-size: 35px;">323:16</span>
					</a>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="index.php?page=flight_operations#report" class="home-stat">
						<p>Total PIREPs</p>
						<span style="font-size: 35px;">207</span>
					</a>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="index.php?page=flight_operations#report" class="home-stat">
						<p>Unique Pilots</p>
						<span style="font-size: 35px;">133</span>
					</a>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="index.php?page=flight_operations#report" class="home-stat">
						<p>New Members</p>
						<span style="font-size: 35px; margin-top: 0px;">3</span>
					</a>
				</div>
			</div>

		</div>

	</div>

</div> 

<div class="banner_home_events">
	<div class="container">
		<h1>Upcoming Online Events</h1>
	</div>
</div>

<div class="container home-features">

	<div class="row">
		<div class="col-md-4">
			<img style="padding-top: 30px;" class="img-fluid" src="http://www.flyuk.aero/en/images/home_features/metro.jpg" alt="MetroAir">
		</div>
		<div class="col-md-8">
			<h3 style="margin-top: 35px;">Featured Destination - Rome</h3>
			<p>Rome, the Eternal City, is the capital and largest city of Italy. It's the famed city of the Roman Empire, the Seven Hills, La Dolce Vita , the Vatican City and Three Coins in the Fountain.</p>
			<a class="btn btn-primary" href="index.php?page=search_results&amp;search_type=Single&amp;ICAO=LIRF">Rome Flights</a>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			<img style="padding-top: 10px;" class="img-fluid" src="http://www.flyuk.aero/en/images/home_features/metro.jpg" alt="MetroAir">
		</div>
		<div class="col-md-8">
			<h3 style="margin-top: 15px;">America's waiting for you</h3>
			<p>Explore the fabulous USA with flights from Los Angeles, Chicago, Baltimore and Kansas City. With our Codeshare partner MetroAir you can fly the B777, A330, B787, B757, A319, A230, E170 &amp; DHC8-Q400.</p>
			<a class="btn btn-primary" href="index.php?page=codeshare">Codeshare Flights</a>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			<img style="padding-top: 10px;" class="img-fluid" src="http://www.flyuk.aero/en/images/home_features/skytrack_map.jpg" alt="SkyTrack Live Map">
		</div>
		<div class="col-md-8">
			<h3 style="margin-top: 15px;">SkyTrack - Live Flights</h3>
			<p>Who's flying where? Take a look at the SkyTrack Live Map to see what Fly UK flights are currently being flown, all in real time!</p>
			<a class="btn btn-primary" href="index.php?page=flight_operations">SkyTrack Live Map</a>
		</div>
	</div>
</div>

@endsection

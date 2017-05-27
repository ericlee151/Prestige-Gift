@extends('masterview/master-nofooter')

@section('header')
<title>Prestige | About Us</title>
<link href="{{ asset('/css/custom.css') }}" rel="stylesheet" />
@endsection

@section('body')
<div class="container">
	<div style="margin-bottom: 70px;"></div>
	<h2 align="center">ABOUT US</h2>
	<div align="center">
		<img src="{{asset('/picture/logo/logo1.png')}}" alt="" class="img-responsive">
	</div>
	<p class="text-center">
		<span id="bold">Prestige Gift</span> is a service created in order to offer gift consultation, wrapping and delivery to reduce customers's time and the anxiety of not knowing which gift to buy, in a very conveninet way.
	</p>
	<div style="margin-bottom: 120px;"></div>
	<h2 align="center">OUR SERVICE</h2>
	<div class="row" align="center">
		<div style="margin-bottom: 40px;"></div>
		<div class="col-md-4">
			<i class="fa fa-search fa-5x" aria-hidden="true"></i>
			<h4>Gift Recommendation</h4>
			<p>By answering the Personality Quiz, You can find the best gift that is suitable for your belove one </p>
		</div>
		<div class="col-md-4">
			<i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>
			<h4>Gift Inspiration</h4>
			<p>We also provides our pre-made packages for that fit perfectly in specific occasion.</p>
		</div>
		<div class="col-md-4">
			<i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
			<h4>VIP Gift Consultation</h4>
			<p>Consult with our Prestige Gift Expert one-on-one and we will provide the best solution in any situations, tailored just for you!</p>
		</div>
	</div>
	<div style="margin-bottom: 120px;"></div>
</div>
@endsection
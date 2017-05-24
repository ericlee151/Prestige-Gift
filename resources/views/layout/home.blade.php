@extends('masterview/master')

@section('header')
<title>Prestige</title>
<link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('body')
<!-- Carousel Card -->
<div class="card-carousel">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<div class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="{{asset('/img/bg4.jpg')}}" alt="Awesome Image">
					<div class="carousel-caption">
						<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
					</div>
				</div>
				<div class="item">
					<img src="{{asset('/img/bg4.jpg')}}" alt="Awesome Image">
					<div class="carousel-caption">
						<h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4>
					</div>
				</div>
				<div class="item">
					<img src="{{asset('/img/bg4.jpg')}}" alt="Awesome Image">
					<div class="carousel-caption">
						<h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<i class="material-icons">keyboard_arrow_left</i>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<i class="material-icons">keyboard_arrow_right</i>
			</a>
		</div>
	</div>
</div>

<!-- End Carousel Card -->

	<div class="">
		<div class="container">
			<div class="" style="color: black;">
				<div class="section-heading">
					<h2>Service</h2>
				</div>
				<!-- <div class="text-center">
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-md- 6">
							<h2 style="padding-top: 0px"><i class="fa fa-gift fa-5x" aria-hidden="true"></i></h2>
						</div>
						<div class="col-lg-6 col-sm-6 col-md- 6" style="text-align: left;">
							 <p style="padding-top: 40px;">
							    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							 </p>
						</div>
					</div>
				</div>   -->
			</div>
		</div>
	</div>

<div class="container-fluid">
	<div class="row">

		<div class="testimonail zoomOut clearfix">
			<div class="col-md-4 col-sm-4 col-xs-12 col-no-padding">
				<div class="box">
					<div class="img-thumb">
							<img src="http://shoprocca.com/wp-content/uploads/2014/10/Thoughtful-Giving.jpg" class="img-responsive">
					</div>
					<div class="caption">
						<div class="content">
							<p align="center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>
							<div align="center">
								<a href="#"><button class="btn btn-warning">Read More</button> </a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 col-no-padding">
				<div class="box">
					<div class="img-thumb">
						<img src="http://www.qrsite.com/cmsAdmin/uploads/thumb/slide1_009-hgg.jpg" class="img-responsive">
					</div>
					<div class="caption">
						<div class="content">
							<p align="center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>

							<div align="center">
								<a href="#"><button class="btn btn-warning">Read More</button> </a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 col-no-padding">
				<div class="box">
					<div class="img-thumb">
						<img src="http://www.qrsite.com/cmsAdmin/uploads/thumb/slide1_009-hgg.jpg" class="img-responsive">
					</div>
					<div class="caption">
						<div class="content">
							<p align="center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>

							<div align="center">
								<a href="#"><button class="btn btn-warning">Read More</button> </a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 col-no-padding">
				<div class="box">
					<div class="img-thumb">
						<img src="http://www.qrsite.com/cmsAdmin/uploads/thumb/slide1_009-hgg.jpg" class="img-responsive">
					</div>
					<div class="caption">
						<div class="content">
							<p align="center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>

							<div align="center">
								<a href="#"><button class="btn btn-warning">Read More</button> </a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 col-no-padding">
				<div class="box">
					<div class="img-thumb">
						<img src="http://www.qrsite.com/cmsAdmin/uploads/thumb/slide1_009-hgg.jpg" class="img-responsive">
					</div>
					<div class="caption">
						<div class="content">
							<p align="center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>

							<div align="center">
								<a href="#"><button class="btn btn-warning">Read More</button> </a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12 col-no-padding">
				<div class="box">
					<div class="img-thumb">
							<img src="http://media2.intoday.in/lovesutras/images/stories/Decemcer2011/wedding-1-650_121916051533.jpg" class="img-responsive">
					</div>
					<div class="caption">
						<div class="content">
							<p align="center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							</p>

							<div align="center">
								<a href="#"><button class="btn btn-warning">Read More</button> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="section section-yellow margin-small" align="center">
	<h4>Just a few simple question, you will get the best gift ever!</h4>
	<a href="/questions">
		<button class="btn btn-bg btn-primary" style="background-color: black;">Find Me a Perfect Gift !
		</button>
	</a>
</div>

<div class="section section-black margin-small">
	<div class="container">
		<div class="business-concept">
			<div class="section-heading">
				<h2>About Us</h2>
			</div>
			<div class="text-center">
				 <p>
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				 </p>
				<div align="center">
			  		<button class="btn btn-warning">GET STARTED</button> 
			 	</div>
			</div>  
		</div>
	</div>
</div>

<div class="section margin-small">
	<div class="container">
		<div class="business-concept" style="color: black;">
			<div class="section-heading">
				<h2>Let Get in Touch</h2>
			</div>
			<br>
			<p align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>
			<div class="text-center">
				<div class="row">
					<div class="col-lg-4 col-lg-offset-2 text-center">
						<i class="fa fa-phone fa-3x sr-contact" aria-hidden="true"></i>
						<h4>070 888 888</h4>
					</div>
					<div class="col-lg-4 text-center">
						 <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
						 <h4>
						 	<a href="#" style="color: #fbc02d;font-weight: bold;">presitge_gift@gmail.com</a>
						 </h4>
					</div>
				</div>
			</div>  
		</div>
	</div>
</div>
<style type="text/css">
	#white{
		color: white;
	}
	.section-heading h2::after {
	    position: absolute;
	    content: " ";
	    bottom: 0;
	    left: 0;
	    height: 3px;
	    width: 100%;
	    background: #fbc02d;
	}
	.section {
	    padding-bottom: 60px;
	}
</style>
@endsection
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/cust.css') }}">
	<!-- CSS Files -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/material-kit.css') }}" rel="stylesheet"/>

	@yield('header')

	<!-- CSS Just for demo purpose, don't include it in your project -->

	<link href="{{ asset('/css/demo.css') }}" rel="stylesheet" />
	<style type="text/css">
		.navbar, .navbar.navbar-default {
		    background-color: #232323;
		    color: #FFD700;
		    margin-bottom: 0px;
		}
		body{
			background-color: white;
			font-family: Merriweather,'Helvetica Neue',Arial,sans-serif;
		}
		.btn, .navbar-default, .navbar-default .navbar-header .navbar-brand, h1, h2, h3, h4, h5, h6 {
		    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
		}
		.section-black{
			background-color: #232323;
		}
		.section-yellow{
			background-color: #fbc02d;
		}
	</style>
</head>

<body>

	<!-- Navbar Info -->
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container footer">
	      	<div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
		          	<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
		        </button>
	      	</div>
	      
	      	<div class="brand-centered">
	      		<div class="logo">
		            <img src="{{ asset('picture/logo/logo.png')}}"  rel="tooltip" title="<b>Prestige Gift</b> is the best wishes for happiness <b> --Prestige </b>" data-placement="bottom" data-html="true">
		        </div>
	      	</div>
	   
	      	<div id="navbar" class="navbar-collapse collapse">
		        <ul class="nav navbar-nav navbar-left">
		          	<li class="active"><a href="/">Home</a></li>
		          	<li><a href="#">Service</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
		        	<li><a href="/aboutus">About Us</a></li>
		          	<li><a href="#">Contact Us</a></li>
		        </ul>
	      	</div>
	    </div>
	</nav>
	<!-- End Navbar Info -->

	<!-- body -->
	<div style="margin-top: 70px;"></div>
	@yield('body')
	<!-- end of body -->
	
	<!-- footer -->
	<div class="section section-black">
		<div class="container">
			<div align="center">
				<img src="{{asset('/picture/logo/logo.png')}}" alt="">
			</div>
			<div class="row" align="left">
				<div class="col-md-4 text-center">
					<h3 id="txt_footer_bold">About Us</h3>
					<p id="txt_footer">
						Prestige gift is a service created in order to offer gift consultation, wrapping and delivery to reduce customers' time consumption and anxieties of not knowing which gift to buy, in a very convenient way.
					</p>
				</div>
				<div class="col-md-4 text-center">
					<h3 id="txt_footer_bold">Our Service</h3>
					<p id="txt_footer">
						- Gift Recommendation
						<br>- Gift Inspiration
						<br>- VIP Gift Consultation
					</p>
				</div>
				<div class="col-md-4 text-center">
					<h3 id="txt_footer_bold">Follow Us</h3>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPrestigeGiftShop%2F%3Ffref%3Dts&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="360" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<div style="margin-bottom: 20px;"></div>
					<p id="txt_footer">Website : <a href="#" style="color: #FFD700;">www.prestigegift.com</a></p>
				</div>
				
			</div>
		</div>
	</div>
	
	<!-- end of footer -->

</body>
	<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{ asset('/js/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/material.min.js') }}" ></script>

	<script src="{{ asset('/js/nouislider.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/jquery.flexisel.js') }}" type="text/javascript"></script>


	<script src="{{ asset('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/material-kit.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/jquery.flexisel.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/custom.js') }}" type="text/javascript"></script>

</html>

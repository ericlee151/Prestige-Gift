<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Prestige | Package Info</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

	<!-- CSS Files -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/material-kit.css') }}" rel="stylesheet"/>

	@yield('header')

	<!-- CSS Just for demo purpose, don't include it in your project -->

	<link href="{{ asset('/css/demo.css') }}" rel="stylesheet" />
	<style type="text/css">
		body{
			font-family: Merriweather,'Helvetica Neue',Arial,sans-serif;
		}
		.btn, .navbar-default, .navbar-default .navbar-header .navbar-brand, h1, h2, h3, h4, h5, h6 {
		    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
		}
		.brand-centered {
		  display: flex;
		  justify-content: center;
		  position: absolute;
		  width: 10%;
		  left: 45%;
		  top: 0;
		}
		.navbar-brand {
		  display: flex;
		  align-items: center;
		}
		.navbar{
			border-radius: 0px;
		}
		.navbar, .navbar.navbar-default {
		    background-color: black;
		    color: #FFD700;
		    margin-bottom: 0px;
		}
		body{
			background-color: white;
		}
		.section{
			margin-top: 100px;
		}
		.section-black{
			background-color: black;
		}
		.section-yellow{
			background-color: #fbc02d;
		}
		.margin-small{
			margin-top: 0px;
			margin-bottom: 0px;
		}
		#txt_footer{
			color: white;
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
		          	<li class="active"><a href="#">Home</a></li>
		          	<li><a href="#">About</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right">
		          	<li class="active"><a href="#">Home</a></li>
		          	<li><a href="#">About</a></li>
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
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 text-center">
					<h3 id="txt_footer">About Us</h3>
					<p id="txt_footer">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 text-center">
					<h3 id="txt_footer">Follow Us</h3>
					<span id="txt_footer" style="font-size: 50px;">
						<i class="fa fa-facebook-square" aria-hidden="true"></i>
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</span>
					<div style="margin-bottom: 20px;"></div>
					<p id="txt_footer">Website : <a href="#" style="color: #FFD700;">www.prestigegift.com</a></p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 text-center">
					<h3 id="txt_footer">Our Service</h3>
					<p id="txt_footer">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<!-- end of footer -->

</body>
	<script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/material.min.js') }}" ></script>

	<script src="{{ asset('/js/nouislider.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/material-kit.js') }}" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				items:4,
			    loop:true,
			    margin:10,
			    autoplay:true,
			    autoplayTimeout:5000,
			    autoplayHoverPause:true,
			    responsive:{
			        0:{
			            items:1,
			        },
			        600:{
			            items:2,
			        },
			        1000:{
			            items:4,
			            loop:true
			        }
			    }
			});
		});
		$(document).ready(function () {

	    var navListItems = $('div.setup-panel div a'),
	        allWells = $('.setup-content'),
	        allNextBtn = $('.nextBtn');

	    allWells.hide();

	    navListItems.click(function (e) {
	        e.preventDefault();
	        var $target = $($(this).attr('href')),
	            $item = $(this);

	        if (!$item.hasClass('disabled')) {
	            navListItems.removeClass('btn-success').addClass('btn-default');
	            $item.addClass('btn-success');
	            allWells.hide();
	            $target.show();
	            $target.find('input:eq(0)').focus();
	        }
	    });

	    allNextBtn.click(function () {
	        var curStep = $(this).closest(".setup-content"),
	            curStepBtn = curStep.attr("id"),
	            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
	            curInputs = curStep.find("input[type='text'],input[type='url']"),
	            isValid = true;

	        $(".form-group").removeClass("has-error");
	        for (var i = 0; i < curInputs.length; i++) {
	            if (!curInputs[i].validity.valid) {
	                isValid = false;
	                $(curInputs[i]).closest(".form-group").addClass("has-error");
	            }
	        }

	        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
	    });

	    $('div.setup-panel div a.btn-success').trigger('click');
		});

		jQuery(document).ready(function($) {
 
		        $('#myCarousel').carousel({
		                interval: 5000
		        });
		 
		        //Handles the carousel thumbnails
		        $('[id^=carousel-selector-]').click(function () {
		        var id_selector = $(this).attr("id");
		        try {
		            var id = /-(\d+)$/.exec(id_selector)[1];
		            console.log(id_selector, id);
		            jQuery('#myCarousel').carousel(parseInt(id));
		        } catch (e) {
		            console.log('Regex failed!', e);
		        }
		    });
		        // When the carousel slides, auto update the text
		        $('#myCarousel').on('slid.bs.carousel', function (e) {
		                 var id = $('.item.active').data('slide-number');
		                $('#carousel-text').html($('#slide-content-'+id).html());
		        });
		});
	</script>
</html>

@extends('masterview/master')
@section('header')
<title>Prestige | Package</title>
<link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('/css/package.css')}}">
<link rel="stylesheet" href="{{ asset('/css/wizard.css')}}">
@endsection

@section('body')
<style>
	body{
		background-color: #e5e5e5;
	}
</style>
<div style="margin-top: 80px;"></div>
<div class="container-fluid">
	<div class="main main-raised">
		<div class="section section-basic">
		   	<div class="container">
		   		<div class="row">
		   			<div class="preview col-md-6 style" id="padding">
			   			@include('includeview.gallary')
			   		</div>
		   			<div class="col-md-6" id="padding">
			   			<h2 id="bold">Jennifer Lopez My Glow Eau-de-Toilette Spray, 3.4-Ounce</h2>
			   			<h3>Price : $37.50</h3>
			   			<h4>
			   				About Product : 
			   				<p style="padding-left: 50px; font-size: 15px;">
								<br>- A fruity floral fragrance for young women Sparkling
								<br>- Used for fragrance , mainly for women
								<br>- This is high quality products with good fragrance
								<br>- Soft, sexy, scent touched with subtle, clean freshness
								<br>- Bright citrus fruits are mingled with sheer florals
								<br>- Bursting with feminine sparkle and alive with warm sensuality 
							</p>
			   			</h4>
			   			<h4>
			   				Package Detail : 
			   				<p style="padding-left: 50px; font-style: italic; font-size: 15px;">
			   					Glow is a soft, sexy, scent touched with subtle, clean freshness. Bright citrus fruits are mingled with sheer florals, warmed with soothing vanilla and musk. Glow is bursting with feminine sparkle and alive with warm sensuality.
			   				</p>
			   			</h4> 
			   			
			   			
			   			<div class="text-center" style="margin-top: 50px;">
			   				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: black;"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;PURCHASE NOW !</button>	
			   			</div>
			   		</div>
		   		</div><!-- row -->
				<div class="container">
					
				</div>

		   	</div><!-- container -->
		</div><!-- sec -->
	</div><!-- main -->
</div>
					<!-- end -->



<div style="margin-bottom: 50px;"></div>
	<div class="container">
		
		<h3 id="bold" class="header header-primary text-center">You may also be interested in</h3>	
		
		
		<div class="clearfix"></div>
		<div class="owl-carousel owl-theme">
		    <div class="item">
		    	<a href="">
		    		<div class="column productbox">
					    <img src="{{asset('/picture/product/product2/p1.png')}}">
					    <div class="producttitle">
					    	<p id="bold">Vera Wang Princess by Vera Wang for Women - 3.4 Ounce EDT Spray</p>
					    	<p>Launched by the design house of Vera Wang.When applying any fragrance please consider that there are several factors which can affect the natural smell of your skin and, in turn, the way a scent smells on you.  </p>
					    </div>
					    <div class="productprice">
					    	<div class="pull-right"><a href="#" class="btn btn-primary" role="button" style="background-color: black;">FIND OUT MORE</a></div>
					    <div class="pricetext">$23.56</div></div>
					</div>
		    	</a>
		    </div>

		    <div class="item">
		    	<a href="">
		    		<div class="column productbox">
					    <img src="{{asset('/picture/product/product2/p2.png')}}">
					    <div class="producttitle">
					    	<p id="bold">Love Struck Eau De Parfum Spray for Women by Vera Wang, 1.7 Ounce</p>
					    	<p>VERA WANG LOVESTRUCK by Vera Wang for WOMEN EAU DE PARFUM SPRAY 1.7 OZ Launched by the design house of Vera Wang in 2011, VERA WANG LOVESTRUCK by Vera Wang possesses.</p>
					    </div>
					    <div class="productprice">
					    	<div class="pull-right"><a href="#" class="btn btn-primary" role="button" style="background-color: black;">FIND OUT MORE</a></div>
					    		<div class="pricetext">$21.26</div>
					    </div>
					</div>
		    	</a>
		    </div>

		    <div class="item">
		    	<a href="">
		    		<div class="column productbox">
		    			<img src="{{asset('/picture/product/product2/p3.png')}}">
		    			<div class="producttitle">
					    	<p id="bold">BRITNEY SPEARS HIDDEN FANTASY EDP SPRAY 3.3 OZ FRGLDY</p>
					    	<p >Beautiful and distinctive, TrendToGo brings you another fine fragrance from Britney Spears ALL Fragrances are 100% Guaranteed Authentic. Add it to your cart now BRITNEY SPEARS by Britney Spears.</p>
					    </div>
					    <div class="productprice">
					    	<div class="pull-right"><a href="#" class="btn btn-primary" role="button" style="background-color: black;">FIND OUT MORE</a></div>
					    	<div class="pricetext">$16.95</div></div>
					</div>
		    	</a>
		    </div>
			
			<div class="item">
		    	<a href="">
		    		<div class="column productbox">
		    			<img src="{{asset('/picture/product/product2/p4.png')}}">
		    			<div class="producttitle">
					    	<p id="bold">Britney Spears Curious Eau de Parfum, 3.3 oz</p>
					    	<p>An exhilarating white floral wrapped in the sensuality of vanilla-infused musk. Irresistibly fragrant blooms of Louisana magnolia touched with a flirtatious hint of golden Anjou pear and dewy.</p>
					    </div>
					    <div class="productprice">
					    	<div class="pull-right"><a href="#" class="btn btn-primary" role="button" style="background-color: black;">FIND OUT MORE</a></div>
					    	<div class="pricetext">$23.95</div></div>
					</div>
		    	</a>
		    </div>
		    

		</div>
	</div>
<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<i class="material-icons">clear</i>
			</button>
		</div>
		<div class="modal-body">
			@include('includeview.formwizard')
		</div>
	</div>
</div>
</div>
<!--  End Modal -->
@endsection
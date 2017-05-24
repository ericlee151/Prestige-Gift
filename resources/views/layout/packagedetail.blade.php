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
		   			<div class="col-md-6 col-sm-6 style" id="padding">
			   			@include('includeview.gallary')
			   		</div>
		   			<div class="col-md-6 col-sm-6" id="padding">
			   			<h1 id="bold">Package Name</h1>
			   			<h2>Price : 25$</h2>
			   			<h4>
			   				Package Contain : 
			   				<br><p style="padding-left: 50px; font-style: italic; font-size: 15px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			   			</h4> 
			   			
			   			<h4>
			   				Package Discription : 
			   				<br><p style="padding-left: 50px; font-size: 15px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			   			</h4>
			   			<div class="text-center" style="margin-top: 50px;">
			   				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: black;"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;PURCHASE NOW !</button>	
			   			</div>
						
			   		</div>

                   <!--  <div class="col-md-6 col-sm-6">
						<h1 id="bold"> Becky Silk Blazer </h1>
						<h3>$335</h3>
						<div style="margin-bottom: 20px;"></div>
						<div id="acordeon">
                            <div class="panel-group" id="accordion">
								
								<div class="panel panel-border panel-default">
		                            <div class="panel-heading" role="tab" id="headingOne">
		                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		                                    <h4 class="panel-title">
		                                    Description
		                                    <i class="material-icons">keyboard_arrow_down</i>
		                                    </h4>
		                                </a>
		                            </div>
		                            <div id="collapseOne" class="panel-collapse collapse in">
		                              <div class="panel-body">
		                                <p>Eres' daring 'Grigri Fortune' swimsuit has the fit and coverage of a bikini in a one-piece silhouette. This fuchsia style is crafted from the label's sculpting peau douce fabric and has flattering cutouts through the torso and back. Wear yours with mirrored sunglasses on vacation.</p>
		                              </div>
		                            </div>
		                          </div>

		                        <div class="panel panel-border panel-default">
		                            <div class="panel-heading" role="tab" id="headingOne">
		                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseOne">
		                                    <h4 class="panel-title">
		                                    Details and Care
		                                    <i class="material-icons">keyboard_arrow_down</i>
		                                    </h4>
		                                </a>
		                            </div>
		                            <div id="collapseThree" class="panel-collapse collapse">
		                              <div class="panel-body">
		                                <ul>
		                                     <li>Storm and midnight-blue stretch cotton-blend</li>
		                                     <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single vent, internal pocket</li>
		                                     <li>Two button fastening</li>
		                                     <li>84% cotton, 14% nylon, 2% elastane</li>
		                                     <li>Dry clean</li>
		                                </ul>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="text-center" style="margin-top: 50px;">
					   				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: black;"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;PURCHASE NOW !</button>	
					   			</div>
                        	</div>
                        </div><!--  end acordeon -->
		   			</div><!-- end col -->
		   		</div><!-- row -->
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
					    <img src="https://scontent-hkg3-1.xx.fbcdn.net/v/t34.0-12/18643617_1919965071362973_1585014738_n.jpg?_nc_eui2=v1%3AAeFd-DDAK1Y4hvgQd2zXfdqNxAAdIA2hVfayaFwfNbhVWXjuuwIwi0ZuDxYagZJg8ydoZovcRZ2JH5x-cCWzQW5kcSi8ZydRah8V5gcRPRQ0cQ&oh=33eb4eec48d0521a2ee1c403b4f5d6ce&oe=592650B1" class="img-responsive">
					    <div class="producttitle">
					    	<h4>CHOCOLATE LOVE</h4>
					    	<p >This is the package make perfectly for valentine day indoor and out door</p>
					    </div>
					    <div class="productprice">
					    	<div class="pull-right">
					    		<a href="#" class="btn btn-danger btn-sm" role="button">BUY</a>
					    	</div>
					    <div class="pricetext">£8.95</div></div>
					</div>
		    	</a>
		    </div>

		    <div class="item">
		    	<a href="">
		    		<div class="column productbox">
					    <img src="https://scontent-hkg3-1.xx.fbcdn.net/v/t34.0-12/18643617_1919965071362973_1585014738_n.jpg?_nc_eui2=v1%3AAeFd-DDAK1Y4hvgQd2zXfdqNxAAdIA2hVfayaFwfNbhVWXjuuwIwi0ZuDxYagZJg8ydoZovcRZ2JH5x-cCWzQW5kcSi8ZydRah8V5gcRPRQ0cQ&oh=33eb4eec48d0521a2ee1c403b4f5d6ce&oe=592650B1" class="img-responsive">
					    <div class="producttitle">
					    	<h4>CHOCOLATE LOVE</h4>
					    	<p >This is the package make perfectly for valentine day indoor and out door</p>
					    </div>
					    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">£8.95</div></div>
					</div>
		    	</a>
		    </div>

		    <div class="item">
		    	<a href="">
		    		<div class="column productbox">
					    <img src="https://scontent-hkg3-1.xx.fbcdn.net/v/t34.0-12/18643617_1919965071362973_1585014738_n.jpg?_nc_eui2=v1%3AAeFd-DDAK1Y4hvgQd2zXfdqNxAAdIA2hVfayaFwfNbhVWXjuuwIwi0ZuDxYagZJg8ydoZovcRZ2JH5x-cCWzQW5kcSi8ZydRah8V5gcRPRQ0cQ&oh=33eb4eec48d0521a2ee1c403b4f5d6ce&oe=592650B1" class="img-responsive">
					    <div class="producttitle">
					    	<h4>CHOCOLATE LOVE</h4>
					    	<p >This is the package make perfectly for valentine day indoor and out door</p>
					    </div>
					    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">£8.95</div></div>
					</div>
		    	</a>
		    </div>

		    <div class="item">
		    	<a href="">
		    		<div class="column productbox">
					    <img src="https://scontent-hkg3-1.xx.fbcdn.net/v/t34.0-12/18643617_1919965071362973_1585014738_n.jpg?_nc_eui2=v1%3AAeFd-DDAK1Y4hvgQd2zXfdqNxAAdIA2hVfayaFwfNbhVWXjuuwIwi0ZuDxYagZJg8ydoZovcRZ2JH5x-cCWzQW5kcSi8ZydRah8V5gcRPRQ0cQ&oh=33eb4eec48d0521a2ee1c403b4f5d6ce&oe=592650B1" class="img-responsive">
					    <div class="producttitle">
					    	<h4>CHOCOLATE LOVE</h4>
					    	<p >This is the package make perfectly for valentine day indoor and out door</p>
					    </div>
					    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">BUY</a></div><div class="pricetext">£8.95</div></div>
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
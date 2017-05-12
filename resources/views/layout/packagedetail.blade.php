@extends('masterview/master')
@section('header')
<title>Prestige | Package</title>
<link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('/css/package.css')}}">
@endsection

@section('body')
<div class="main main-raised">
<div class="section section-basic">
   	<div class="container">
   		<div class="col-lg-6 col-sm-6 col-md-6">
   			@include('includeview.gallary')
   		</div>
   		<div class="col-lg-6 col-sm-6 col-md-6">
   			<h1>Package Name</h1>
   			<h4>Rate : 
   				<span style="color: #FFD700;">
   					<i class="fa fa-star" aria-hidden="true"></i> 
	   				<i class="fa fa-star" aria-hidden="true"></i> 
	   				<i class="fa fa-star" aria-hidden="true"></i> 
	   				<i class="fa fa-star" aria-hidden="true"></i> 
	   				<i class="fa fa-star" aria-hidden="true"></i> 
   				</span>
   				| Order : 226
   			</h4>
   			<div style="margin-top: 40px;"></div>
   			<hr>
   			<div style="margin-top: 40px;"></div>
   			<h4>Price : 25$</h4>
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
    </div>

	<div class="section section-tabs">
		<div class="container">
			<div class="profile-tabs">
				<div class="nav-align-center">
					<ul class="nav nav-pills" role="tablist">
						<li class="active">
							<a href="#studio" role="tab" data-toggle="tab">
								<i class="material-icons">rate_review</i>
								RATE
							</a>
						</li>
						<li>
					        <a href="#work" role="tab" data-toggle="tab">
								<i class="material-icons">insert_comment</i>
								COMMENT
					        </a>
					    </li>
					</ul>

					<div class="tab-content gallery">
						<div class="card card-nav-tabs">
							<div class="content">
								<div class="tab-content">
									<div class="tab-pane active" id="studio">
						        		<div class="media">
											<div class="media-left media-middle">
											    <a href="#">
											      <img class="media-object" src="{{asset('/picture/profile/profile.png')}}" alt="...">
											    </a>
											</div>
											<div class="media-body">
											    <h4 class="media-heading">@user1299293</h4>
											    Rate : 
									   				<span style="color: #FFD700;">
									   					<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
									   				</span>
									   			<br>Arrived in 30 days, product as described, only consumes battery fast with the gps activated. seller answers questions fast and answers questions, I recommend.
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="media">
											<div class="media-left media-middle">
											    <a href="#">
											      <img class="media-object" src="{{asset('/picture/profile/profile.png')}}" alt="...">
											    </a>
											</div>
											<div class="media-body">
											    <h4 class="media-heading">@user1299293</h4>
											    Rate : 
									   				<span style="color: #FFD700;">
									   					<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
									   				</span>
									   			<br>Arrived in 30 days, product as described, only consumes battery fast with the gps activated. seller answers questions fast and answers questions, I recommend.
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="media">
											<div class="media-left media-middle">
											    <a href="#">
											      <img class="media-object" src="{{asset('/picture/profile/profile.png')}}" alt="...">
											    </a>
											</div>
											<div class="media-body">
											    <h4 class="media-heading">@user1299293</h4>
											    Rate : 
									   				<span style="color: #FFD700;">
									   					<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
									   				</span>
									   			<br>Arrived in 30 days, product as described, only consumes battery fast with the gps activated. seller answers questions fast and answers questions, I recommend.
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="media">
											<div class="media-left media-middle">
											    <a href="#">
											      <img class="media-object" src="{{asset('/picture/profile/profile.png')}}" alt="...">
											    </a>
											</div>
											<div class="media-body">
											    <h4 class="media-heading">@user1299293</h4>
											    Rate : 
									   				<span style="color: #FFD700;">
									   					<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
										   				<i class="fa fa-star" aria-hidden="true"></i> 
									   				</span>
									   			<br>Arrived in 30 days, product as described, only consumes battery fast with the gps activated. seller answers questions fast and answers questions, I recommend.
											</div>
										</div>
								    </div>


								    <div class="tab-pane" id="work">
				                        <form class="contact-form">
				                            <div class="row">
				                                <div class="col-md-6">
													<div class="form-group label-floating has-warning">
														<label class="control-label">Your Name</label>
														<input type="email" class="form-control">
													</div>
				                                </div>
				                                <div class="col-md-6">
													<div class="form-group label-floating has-warning">
														<label class="control-label">Your Email</label>
														<input type="email" class="form-control">
													</div>
				                                </div>
				                            </div>

											<div class="form-group label-floating has-warning">
												<label class="control-label">Your Messge</label>
												<textarea class="form-control" rows="4"></textarea>
											</div>

				                            <div class="row">
				                                <div class="col-md-4 col-md-offset-4 text-center">
				                                    <button class="btn btn-primary btn-raised btn-warning">
														Send Message
													</button>
				                                </div>
				                            </div>
				                        </form>

							    	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="margin-bottom: 100px;"></div>
	<div class="container">
		<div class="profile-tabs">
			<div class="nav-align-center">
				<ul class="nav nav-pills" role="tablist">
					<li class="active">
						<a href="#">
							<i class="material-icons">new_releases</i>
							Related Package
						</a>
					</li>
				</ul>
			</div>
		</div>	
		<div class="clearfix"></div>
		<div class="owl-carousel owl-theme">
		    <div class="item">
		    	<a href="">
		    		<div class="column productbox">
					    <img src="{{asset('/picture/gift/g2.jpg')}}" class="img-responsive">
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
					    <img src="{{asset('/picture/gift/g3.jpg')}}" class="img-responsive">
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
					    <img src="{{asset('/picture/gift/g4.jpg')}}" class="img-responsive">
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
					    <img src="{{asset('/picture/gift/g5.jpg')}}" class="img-responsive">
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
@extends('masterview/master')

@section('header')
<title>Prestige | Payment</title>
<link href="{{ asset('/css/payment.css') }}" rel="stylesheet"/>
@endsection

@section('body')
	<div class="margin">

		<h2 id="h2-style">SELECT PAYMENT METHOD</h2>
		<div class="container" style="background-color: #FFD700;padding: 20px;">
			<div>
			  <!-- Nav tabs -->
				<ul class="nav nav-tabs nav-justified" role="tablist">
					<li role="presentation" class="active">
					 	<a href="#creditcard" aria-controls="creditcard" role="tab" data-toggle="tab">
					 		<i class="fa fa-credit-card fa-2x" aria-hidden="true"></i> <br>Credit Card
					 	</a>
					</li>
					<li role="presentation">
					 	<a href="#smart-luy" aria-controls="smart-luy" role="tab" data-toggle="tab">
					 		<img src="{{asset('/picture/logo/logo2.png')}}" alt=""><br>Smart Luy</a>
					</li>
					<li role="presentation">
					 	<a href="#wing" aria-controls="wing" role="tab" data-toggle="tab">
					 		<img src="{{asset('/picture/logo/logo4.png')}}" alt="" width="25px" height="25px"> <br>Wing
					 	</a>
					</li>
					<li role="presentation">
						<a href="#payandgo" aria-controls="payandgo" role="tab" data-toggle="tab">
							<img src="{{asset('/picture/logo/logo3.png')}}" alt=""><br>Pay and Go
						</a>
					</li>
				</ul>

			</div>  
		</div>

		<div class="container">
			<div style="margin-top: 50px;"></div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="creditcard">
					<h3 align="center">Credit Card Information</h3>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="card" id="padding">
								<div class="form-group">
		                            <label class="control-label">Card Number</label>
		                            <input type="number" required="required" class="form-control" placeholder="0000-0000-0000-0000" />
		                        </div>
		                        <div class="row">
		                        	<div class="col-md-4 col-xs-4">
		                        		<label class="control-label">Experation</label>
		                            	<input type="number" required="required" class="form-control" placeholder="Month" />
		                        	</div>
		                        	<div class="col-md-4 col-xs-4">
		                        		<label class="control-label">Card Number</label>
		                            	<input type="number" required="required" class="form-control" placeholder="Year" />
		                        	</div>
		                        	<div class="col-md-4 col-xs-4">
		                        		<label class="control-label">CVV Number</label>
		                            	<input type="number" required="required" class="form-control" placeholder="xxxx" />
		                        	</div>
		                        </div>
		                        <div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										By Checking this box, I agree to Terms, Condition Privacy and Policy
									</label>
								</div>
								<div align="center">
									<button class="btn btn-warning btn-lg" style="background-color: black; width: auto;" data-toggle="modal" data-target="#myModal">Make A Payment</button>
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>

					</div>
					
				</div>
				<div role="tabpanel" class="tab-pane" id="wing">
					
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="card" id="padding">
								<h3 align="center">Please fill in the information</h4>

								<div class="form-group">
		                            <label class="control-label">Wing Account</label>
		                            <input type="number" required="required" class="form-control" placeholder="0000-0000-0000-0000" />
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label">Phone Number</label>
		                            <input type="number" required="required" class="form-control" placeholder="0000-0000-0000-0000" />
		                        </div>
		                        <div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										By Checking this box, I agree to Terms, Condition Privacy and Policy
									</label>
								</div>
		                        <div align="center">
									<button class="btn btn-warning btn-lg" style="background-color: black; width: auto;" data-toggle="modal" data-target="#myModal">Make A Payment</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-2"></div>
					</div>
				
				</div>
				<div role="tabpanel" class="tab-pane" id="smart-luy">
					<h3 align="center">Please Fill in the form below</h3>
					
					<div class="row">
						<div class="col-md-2 "></div>
						<div class="col-md-8">
							<div class="card" id="padding">
								<div class="form-group">
		                            <label class="control-label">Phone Number</label>
		                            <input type="number" required="required" class="form-control" placeholder="xxx-xxx-xxx" />
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label">Smart Luy PIN Number</label>
		                            <input type="number" required="required" class="form-control" placeholder="xxxxxxxxx" />
		                        </div>
		                        <div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										By Checking this box, I agree to Terms, Condition Privacy and Policy
									</label>
								</div>
		                        <div align="center">
									<button class="btn btn-warning btn-lg" style="background-color: black; width: auto;" data-toggle="modal" data-target="#myModal">Make A Payment</button>
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				
				</div>
				<div role="tabpanel" class="tab-pane" id="payandgo">
					<h3 align="center">Please Fill in the form below</h3>
					<div class="row">
						<div class="col-md-2 "></div>
						<div class="col-md-8">
							<div class="card" id="padding">
								<div class="form-group">
		                            <label class="control-label">Phone Number</label>
		                            <input type="number" required="required" class="form-control" placeholder="xxx-xxx-xxx" />
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label">Pay and Go Account ID</label>
		                            <input type="number" required="required" class="form-control" placeholder="xxxxxxxxx" />
		                        </div>
		                        <div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes">
										By Checking this box, I agree to Terms, Condition Privacy and Policy
									</label>
								</div>
		                        <div align="center">
									<button class="btn btn-warning btn-lg" style="background-color: black; width: auto;" data-toggle="modal" data-target="#myModal">Make A Payment</button>
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content" style="background-color: black;">
      		<div class="modal-header">
        		<h4 class="modal-title" id="myModalLabel" align="center" style="color: #FFD700"><i class="fa fa-check-circle fa-5x" aria-hidden="true"></i></h4>
      		</div>
      		<div class="modal-body">
        		<h2 align="center" style="color: white;">Success Payment !<br> Thank you for comming by !</h2>
      		</div>
      		<div class="modal-footer" style="background-color: white;padding: 20px; text-align: center;">
        		<a href="/">
        			<button type="button" class="btn btn-warning" style="background-color: #FFD700;color: black; width: 300px; font-size: 25px; border: 2px solid black;">OK</button>
        		</a>
      		</div>
    	</div>
  	</div>
</div>
@endsection

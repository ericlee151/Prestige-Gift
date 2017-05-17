@extends('masterview/master')

@section('header')
<title>Prestige | Payment</title>
<link href="{{ asset('/css/card.css') }}" rel="stylesheet"/>
@endsection

@section('body')
	<div class="margin">
		<h2 style="text-align: center;font-weight: bold;margin-bottom: 80px;">SELECT PAYMENT METHOD</h2>
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
					 	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
					 		<i class="fa fa-paypal fa-2x" aria-hidden="true"></i> <br>PayPal
					 	</a>
					</li>
					<li role="presentation">
					 	<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
					 		<img src="{{asset('/picture/logo/logo2.png')}}" alt=""><br>Smart Luy</a>
					</li>
					<li role="presentation">
						<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">
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
						<div class="col-md-2"></div>

					</div>
					
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">...dd</div>
				<div role="tabpanel" class="tab-pane" id="messages">...</div>
				<div role="tabpanel" class="tab-pane" id="settings">...</div>
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
<style type="text/css">
	.margin{
		margin-top: 100px;
	}
	.nav-tabs {
	    background: #FFD700;
	    border: 0;
	    border-radius: 3px;
	    padding: 20px 15px ;
	}
	.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
	    background-color: black;
	    transition: background-color .1s .2s;
	}
	.modal-open .modal {
		margin-top: 150px;
	}
</style>
@endsection

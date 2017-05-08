<html lang="en">
<head>
	
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Prestige | Package Info</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.min.css')); ?>">

	<!-- CSS Files -->
    <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/css/material-kit.css')); ?>" rel="stylesheet"/>
	<?php echo $__env->yieldContent('header'); ?>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo e(asset('/css/demo.css')); ?>" rel="stylesheet" />
	
</head>
	<?php $__env->startSection('header'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/css/owl.carousel.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('/css/owl.theme.default.min.css')); ?>">
	<?php $__env->stopSection(); ?>
<body>
<div class="container">
		<div class="row">
			<div class="headers">
				<div class="section-heading">
					<h2>Let's Get In Touch!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
	   		<div class="col-lg-6 col-sm-6 col-md-6">
	   			<?php echo $__env->make('includeview.image', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
	<div class="container">
	   		<div class="col-lg-6 col-sm-6 col-md-6">
	   			<?php echo $__env->make('includeview.image', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
</body>
</html>
<?php echo $__env->make('masterview/optionview', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
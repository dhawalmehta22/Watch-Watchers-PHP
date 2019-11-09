<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from new.uouapps.com/takeaway/menu-with-right-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:14 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menu</title>
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/thumb-slide.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!--[if IE 9]>
	<script src="js/media.match.min.js"></script>
	<![endif]-->

<script>
function cart(){
	<?php  $cartItemName="";
	 $cartItemPrice="";
	 $sum=0;
	 $quantity=0;
	?>
	<?php $quantity ?>=document.getElementById('quantity').value();
	<?phpif($quantity>0){
		 $cartItemName=$itemName; 
	 $cartItemName=$itemPrice;
	 $sum+=$quantity*$cartItemPrice;
	 }?>
		
}
</script>
<style>

</style>
</head>

<body>
  <?php
	include("dbconnect.php");
	
	
?>
	<div id="main-wrapper">
	<?php include('header.php');
?>	
	<!-- end #header -->
		

			<!-- start #main-wrapper -->
			<div class="container">
				<div class="row mt30">
					<div class="col-md-7 col-md-push-3">
						<ul class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#tab-1" role="tab" data-toggle="tab">All</a>
							</li>
							<li><a href="#tab-2" role="tab" data-toggle="tab">Breakfast</a>
							</li>
							<li><a href="#tab-3" role="tab" data-toggle="tab">Lunch</a>
							</li>
							<li><a href="#tab-3" role="tab" data-toggle="tab">Snacks</a>
							</li>
							<li><a href="#tab-3" role="tab" data-toggle="tab">Dinner</a>
							</li>
						</ul>

						<div class="view-style dsn">
							<div class="list-grid-view">
								
								<button class="without-thumb" ><i class="fa fa-align-justify"></i></button>
								
							</div>
							<!-- end .list-grid-view -->

							<div class="page-list text-right">
								<ul class="list-unstyled list-inline">
									<li class="active"><a href="#">1</a>
									</li>
									<li><a href="#">2</a>
									</li>
									<li><a href="#">3</a>
									</li>
									<li><a href="#">4</a>
									</li>
									<li><a href="#">5</a>
									</li>
									<li><a href="#">6</a>
									</li>
								</ul>
							</div>
							<!-- end .page-list -->
						</div>
						<!-- end view-style -->
						
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-1">
								<div class="all-menu-details">
									<center><h5>Daily Menu</h5></center>
									<?php
													$sql="select * from menu";
													
													$rs=mysqli_query($con,$sql);			
						
						
													while($row=mysqli_fetch_array($rs))
													{
														$itemName=$row[1];
														$itemPrice=$row[2];
													
													
													?>
									<div class="item-list right-checkout">
										
										<div class="all-details">
											<div class="visible-option">
												<div class="details">
												
													<h6><a href="#"><?php echo $itemName; ?></a>
													</h6>
													
													
													
												</div>

												<div class="price-option fl">
													<h4><?php echo $itemPrice; ?> Rs.</h4>
													
												</div>
												<!-- end .price-option-->
												<div class="qty-cart text-center clearfix">
													<h6>Quantity</h6>
													<form class="">
														<input type="number" placeholder="0" min="0" id="quantity" style="width:55px;">
														<br>
														<button name="addCart" onclick="cart();"><i class="fa fa-shopping-cart"></i></button>
														
														
													</form>
												</div> <!-- end .qty-cart -->
											</div> <!-- end .visible-option -->	
										
											
										</div>
										<!-- end .all-details -->
									</div>
													<?php } ?>
									<!-- end .item-list -->
	
									<<div class="item-list right-checkout" style="background-color: white;">
									
										<div class="all-details">
											
											
										</div>
										<!-- end .all-details -->
									</div>
									<!-- end .item-list -->
								</div>
								<!--end all-menu-details-->
							</div> <!-- end .tab-pane  -->
						</div> <!-- end .tab-content -->

						<!-- end .pagination -->
					</div>
					<!--end main-grid layout-->
					
					<!-- Side-panel begin -->
					<div class="col-md-3 col-sm-12 col-xs-12 col-md-pull-7">
						<div class="side-panel">
							<form class="default-form">
								<h6 class="toggle-main-title">Checkout Details</h6>
								<div class="sd-panel-heading">
									<h5 class="toggle-title">My Check</h5>
									<div class="slideToggle">
										<ul class="list-unstyled">
											<li>
												<p>
													<span class="icon-link"><i class="fa fa-pencil"></i><i class="fa fa-times"></i>
													</span>
												</p>
												
											</li>
											<li>
												<p><?php echo $quantity; echo $cartItemName; ?>
													<span class="icon-link"><i class="fa fa-pencil"></i><i class="fa fa-times"></i>
													</span>
												</p>
							
												<p class="price"><?php echo $cartItemPrice; ?></p>
											</li>
											
											<li>
												<!-- list for total price-->
												<p>Total</p>
												<p class="price-total"><?php echo $sum ?></p>
											</li>
											<li>
											<input type="text" placeholder="Special instructions">
											</li>
										</ul>

										<div class="checkout">
											<a class="btn btn-default-red" href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
										</div>
									</div>
									<!--end .slide-toggle -->
								</div>
								<!-- end .sd-side-panel class -->
								
							</form>
							<!-- end form -->
						</div>
						<!-- end side-panel -->
					</div>
					<!--end .col-md-3 -->
					
						<!-- end .chekout class -->
					</div>
				</div>
				<!-- end .row -->
			</div>
			<!--end .container -->
			<!-- footer begin -->
		<footer id="footer">
			<div class="container">
				<div class="main-footer">
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<img src="img/header-logo.png" alt="">
							<p>It all comes back to the basics. Serve customers the best-tasting food at a good value in a clean, comfortable restaurant, and they'll keep coming back.
							</p>
						</div>

						<div class="col-sm-6 col-md-3" style= "float:right;">
							<h5>Quick Links</h5>
							<div class="row">
								<div class="col-md-6">
									<ul class="footer-links padd">
										<li><a href="index.html">Home</a>
										</li>
										<li><a href="#">Menu</a>
										</li>
										
									</ul>
								</div>

								<div class="col-md-6">
									<ul class="footer-links">
										
										<li><a href="StudentSignUpForm.html">login/signup</a>
										</li>
										<li><a href="contact-us.html">contact us</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
		</footer>
			<!-- end #footer -->
			
		</div> <!-- end .page-content -->
	</div>
		<!-- end #main-wrapper -->

		<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Local jQuery -->
		<script>
		window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
		</script>
		<script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/jquery.ui.map.js"></script>
		<script src="js/scripts.js"></script>

		<script>
		
		</script>

</body>


<!-- Mirrored from new.uouapps.com/takeaway/menu-with-right-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 04:37:14 GMT -->
</html>

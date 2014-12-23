<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Product Details | E-Shopper</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <link href="plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" />
    <style>
    	.view-product a img, #similar-product a img {
    		margin-bottom:5px !important;

    	}
    	.view-product a, #similar-produc a{
    		color:transparent!important;
    	}
    </style>

</head><!--/head-->

<body>
	<?php include 'header.php'; ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<?php include 'products-menu.php'; ?>
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<a class="gallery-product" href="images/product-details/1.jpg" title="Product1"><img src="images/product-details/1.jpg" alt="" /></a>
							</div>
							<div id="similar-product" >
								<!-- Wrapper for slides -->
									<a class="gallery-product" href="images/product-details/similar1.jpg" title="Product1"><img src="images/product-details/similar1.jpg" alt="" /></a>
									<a class="gallery-product" href="images/product-details/similar2.jpg" title="Product1"><img src="images/product-details/similar2.jpg" alt="" /></a>
									<a class="gallery-product" href="images/product-details/similar3.jpg" title="Product1"><img src="images/product-details/similar3.jpg" alt="" /></a>
								<!-- Controls -->
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
								<p>Web ID: 1089772</p>
								<span>
									<span>US $59</span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<h2 class="title">Details</h2>
						</div>
						<div class="tab-content">
							<div id="details">
								<p>This is an awersome product</p>
							</div>		
						</div>
					</div><!--/category-tab-->
					
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php'; ?>

	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>

	<!-- PAGE LEVEL SCRIPTS -->
	<script src="plugins/jquery.fancybox-1.3.4/jquery-1.4.3.min.js"></script> <!--important for gallery-->
	<script src="plugins/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
	<script src="plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
	<script src="js/image-gallery.js"></script>

</body>
</html>
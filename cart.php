<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
</head><!--/head-->

<body>
	<?php include 'header.php'; ?>
	<section id="cart_items">
		<div class="container">
		<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<!-- <h2 class="title">Category</h2> -->
						<?php include 'products-menu.php'; ?>
					</div>
				</div>
			<div class="col-sm-9 padding-right">
				<div class="breadcrumbs">
					<h2 class ="title"> Shopping Cart </h2>
				</div>
				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
							<tr class="cart_menu">
								<td class="image">Item</td>
								<td class="description"></td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="cart_product">
									<a href=""><img src="images/cart/one.png" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href="">Colorblock Scuba</a></h4>
									<p>Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>$59</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
										<a class="cart_quantity_down" href=""> - </a>
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$59</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
							</tr>

							<tr>
								<td class="cart_product">
									<a href=""><img src="images/cart/two.png" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href="">Colorblock Scuba</a></h4>
									<p>Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>$59</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
										<a class="cart_quantity_down" href=""> - </a>
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$59</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<tr>
								<td class="cart_product">
									<a href=""><img src="images/cart/three.png" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href="">Colorblock Scuba</a></h4>
									<p>Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>$59</p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
										<a class="cart_quantity_down" href=""> - </a>
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$59</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
					<div class="total_area col-sm-5 pull-right">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section> <!--/#cart_items-->
	
	<?php include 'footer.php'; ?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
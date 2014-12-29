<?php
	require_once('database/config.php');
	$anchor = "<a class='dropdown-toggle' href='' data-toggle='dropdown'><i class='fa fa-user'></i><span class='caret'></span></a>";
	$dropdown = $anchor."<ul class='dropdown-menu dropdown-user'><li><a href='#'><i class='fa fa-user'></i>User Profile</a></li><li class='divider'></li>".
				"<li><a id='logout-btn' href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></ul>";
	$link = "<li class='dropdown'>".$dropdown."</li>";
	if(!isset($_SESSION['username'])){
		$link = "<li><a class='nav-item' href='#' data-target='#myModal' data-toggle='modal'>Login</a></li>";
	};
?>
<header id="header"><!--header-->
	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<?php echo $link; ?>
							<li><a href="contact-us.php">Contact</a></li>
							<li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="logo">
						<a class = "pull-center" href="index.php"><img src="images/home/logo.png" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->
<?php include 'login.php'; ?>

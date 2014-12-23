<header id="header"><!--header-->
	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<li><a href="#" data-target="#myModal" data-toggle="modal">Login</a></li>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Log in / Create account</h4>
			</div>
			<div class="modal-body row">
				<div class="login-form col-sm-5">
					<h2>Existent Customer</h2>
					<form action="scripts/login.php" method ="post">
						<input type="text" placeholder="Email Address" name= "username" id="username"/>
						<input type="password" placeholder="Password" name ="password" id="password" />
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<button type="submit" id="login-btn" class="btn btn-default">Login</button>
					</form>
				</div>
				<div class="col-sm-7">
					<h2>New Customer</h2>
					<p> If you still don't have a irina.com account, use this option to access the registration form.</p>
					<p>By giving us your details, purchasing in Irina.com will be a faster and enjoyable experience. </p>
					<button  id = "create-account" type="submit" class="btn btn-default">Create account</button>
				</div>
				<div class="signup-form col-sm-7 hidden" ><!--sign up form-->
					<form action="#">
						<input type="text" placeholder="Name"/>
						<input type="email" placeholder="Email Address"/>
						<input type="password" placeholder="Password"/>
						<button type="submit" class="btn btn-default">Signup</button>
					</form>
				</div><!--/sign up form-->
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			</div> 
		</div>
	</div>
</div>


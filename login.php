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
					<form class="block-validate">
						<div class="form-group">
							<input type="email" placeholder="Email Address" name= "email" id="email"  class="form-control" required=""/>
						</div>
						<div class="form-group">
							<input type="password" placeholder="Password" name ="password" id="password" class="form-control" required=""/>
						</div>
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<div class="form-actions">
							<button type="submit" id="login-btn" class="btn btn-default">Login</button>
						</div>
					</form>
				</div>
				<div class = "signup-content col-sm-7">
					<div class = "message-to-customer">
						<h2>New Customer</h2>
						<p> If you still don't have a irina.com account, use this option to access the registration form.</p>
						<p>By giving us your details, pur`chasing in Irina.com will be a faster and enjoyable experience. </p>
						<button  id="create-account" type="submit" class="btn btn-default">Create account</button>
					</div>
					<div class ="signup-form hidden">
						<h2>New Customer</h2>
						<form  class="block-validate">
							<div class="form-group">
								<input type="text" placeholder="First Name"/ name="firstname" id="firstname" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Last Name" name="lastname" id="lastname" class="form-control" required=""/>
							</div>
							<div class="form-group">
								<input type="email" placeholder='Email Address' name="email1" id="email1"  class="form-control" required=""/>
							</div>
							<div class="form-group">
							<input type="text" placeholder='Address' name="address" id ="address" class="form-control" required=""/>
							</div>
							<div class="form-group">
								<input type="password" placeholder="Password" name="password1" id ="password1" class="form-control"  required=""/>
							</div>
							<input type="password" placeholder="Confirm Password" name="password2" id ="password2" class="form-control" required=""/>
							<div class="form-actions">
								<button type="submit" class="btn btn-default">Signup</button>
							</div>
						</form>
					</div>
				</div>
			</div><!--/sign up form-->
		</div>
	</div>
</div>

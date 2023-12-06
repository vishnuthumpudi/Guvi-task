<?php include("includes/header.php") ?>
<?php
if(loggedin()){
	redirect("admin.php");
}
 ?>






	<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" role="form">
					<span class="login100-form-title">
						Member Login
					</span>
					<?php
					validate_user_login(); ?>
					 <?php display_message(); ?>
					<div class="wrap-input100 validate-input" data-validate = 'email required'>
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Login" name="login-submit" id="login-submit">

						</input>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="recover.php">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
						<i class="fas fa-long-arrow-alt-right"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include("includes/footer.php") ?>

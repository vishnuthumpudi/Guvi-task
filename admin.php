<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>

<?php if(loggedin()){

}
else {
	redirect('login.php');
} ?>
<?php
if(entered()){
	redirect('index.php');
} ?>




	<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" role="form">
					<span class="login100-form-title">
						User data
					</span>
					<?php
					validate_user_data(); ?>
					<div class="wrap-input100 validate-input" data-validate = 'interest required'>
						<input class="input100" type="text"  name="interest" placeholder="interests (eg:c,c++)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = 'bio required'>
						<input class="input100" type="text"  name="bio" placeholder="about you .">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = 'Required'>
						<input class="input100" type="text"  name="work" placeholder="Are you a _?">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = 'contact required'>
						<input class="input100" type="text"  name="contact" placeholder="resume link">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = 'bio required'>
						<input class="input100" type="text"  name="img" placeholder="profile image link">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>



					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="save" name="login-submit" id="login-submit">

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




</div>




<?php include("includes/footer.php") ?>

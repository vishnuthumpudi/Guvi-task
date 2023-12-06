<?php include("includes/header.php") ?>


	<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" role="form">
					<span class="login100-form-title">
						Recover Password
					</span>
					<?php
					recover_password(); ?>
					<div class="wrap-input100 validate-input" data-validate = '<?php validate_user_login(); ?>'>
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>



					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Recover" name="recover-submit" id="recover-submit">

						</input>
					</div>



					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
						<i class="fas fa-long-arrow-alt-right"></i>
						</a>
					</div>
          <input type="hidden" class="hide" name="token" id="token" value="<?php echo token_generator(); ?>">
				</form>
			</div>
		</div>
	</div>

<?php include("includes/footer.php") ?>

<?php include("includes/header.php") ?>




	<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form register-form" method="post" role="form">
					<span class="login100-form-title">
						Reset Password
					</span>
					<?php
					password_reset(); ?>
					<div class="wrap-input100 validate-input" data-validate = 'password required'>
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="confirm_password" id="confirm-password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="reset" name="reset-password-submit" id="reset-password-submit">

						</input>
					</div>

					<input type="hidden" class="hide" name="token" id="token" value="<?php echo token_generator(); ?>">

				</form>
			</div>
		</div>
	</div>


<?php include("includes/footer.php") ?>

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
			 validate_code(); ?>
			 <div class="alert alert-success alert-dismissible" style="border-radius: 25px;" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">×</span><span class="sr-only">Close</span>
				</button>email sent<span> </span>
			</div>
					<div class="wrap-input100 validate-input" data-validate = 'password required'>
						<input class="input100" type="text" name="code" id="code" placeholder="Reset Code">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
					</div>


					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="submit" name="code-submit" id="recover-submit">

						</input>
					</div>

				<input type="hidden" class="hide" name="token" id="token" value="">

				</form>
			</div>
		</div>
	</div>



<?php include("includes/footer.php") ?>

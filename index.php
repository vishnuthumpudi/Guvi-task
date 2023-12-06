<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>

<?php if(loggedin()){
	storejson();

}
else {
	redirect('login.php');
} ?>

<?php
$email=clean($_SESSION['email']);
$sql="SELECT * FROM users WHERE email='".$email."'";
$result=query($sql);
$row=fetch_array($result);
$message=<<<DELIMETER
<div class="limiter">

 <div class="container-login100">
	 <div class="wrap-login1001">
		 <div class="image-cropper js-tilt" data-tilt>
			 <img src='{$row['img']}' alt="IMG" class="profile-pic" >
		 </div>



		 <form class="login1001-form top validate-form" method="post" role="form">
		 <span class="login100-form-title">
		 <h1>{$row['username']}</h1>
		 </span>
		 <span class="login1001">
	 <i class="fas fa-envelope fasi" > </i><h4>{$row['email']}</h4>
		 </span>
</br>
		 <span class="login1001">
	 <i class="fas fa-atom fasi"></i><h4>{$row['bio']}</h4>
		 </span></br>
		 <span class="login1001">
	 <i class="fas fa-cogs fasi"></i><h4>{$row['work']}</h4>
		 </span>
		 </br>
		 <span class="login1001">
	 <i class="fas fa-code fasi"></i><h4>{$row['interest']}</h4>
		 </span>
		 </br>
		 <span class="login1001">
	 <i class="fas fa-globe-asia fasi"></i><h4>{$row['contact']}</h4>
		 </span>
		 <div class="container-login100-form-btn">
		 <li class="nav-item active">
			 <a class="login100-form-btn" href="logout.php">logout </a>
		 </li>
			</div>

	 </div>
	 </div>
	 </div>
DELIMETER;
echo $message;


 ?>
<?php include("includes/footer.php") ?>

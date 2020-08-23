<?php
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","userlog");
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$verify_email=mysqli_query($conn,"SELECT * from admin where email='$email'" );
	 $run_verify_email =mysqli_query($conn,$verify_email);


	$verify_email_pass=mysqli_query($conn,"SELECT * from admin where email='$email' and password='$password'" );
	$fetch_email_pass=mysqli_query($conn,$verify_email_pass);

	$row=mysqli_fetch_array($verify_email_pass);

     $_SESSION['id']=$row['id'];

	if(mysqli_num_rows($verify_email)<1){

		echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong class="text-center"> <p class="text-center fountp" style="margin:0px;"> Email-Id Is Not Registered </p></strong> 
            </div>';
	}

	elseif(mysqli_num_rows($verify_email_pass)<1)
  {

	echo '<div class="alert alert-info alert-dismissible">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
           <strong class="text-center"> <p class="text-center fountp" style="margin:0px;"> Password is Wrong !! </p></strong> 
           </div>';
    }

else{

		$sql=mysqli_query($conn,"SELECT * from admin where email='$email' and password='$password'");

		if($sql)
		{
			echo'<script>alert("login successfully")</script>';
			header("location:index.php");
		}




   }

 }

?>


<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 07:16:30 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Login - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title">Management Login</h3>
					<div class="account-box">
						<div class="account-wrapper">
							<div class="account-logo">
								<a href="index.html"><img src="assets/img/logo2.png" alt="Focus Technologies"></a>
							</div>
							<form method="post">
								<div class="form-group form-focus">
									<label class="control-label">Username or Email</label>
									<input class="form-control floating" type="text" name="email">
								</div>
								<div class="form-group form-focus">
									<label class="control-label">Password</label>
									<input class="form-control floating" type="password" name="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" input type="submit" name="login">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 07:16:30 GMT -->
</html>
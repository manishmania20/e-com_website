
<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 07:16:32 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Project - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" type="text/css" href="assets/plugins/summernote/dist/summernote.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
			table{
				background color:#C0C0C0;
				margin: top:40px;
				width:1000px;
				border:collapse;
			}
			td,th
			{
				margin: top:40px;
			}
		</style>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
				<a id="toggle_btn" href="javascript:void(0);"><i class="la la-bars"></i></a>
                <div class="page-title-box pull-left">
					<h3>Focus Technologies</h3>
			<div class="page-wrapper">
              <form control="" method="post">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Manage</h4>
						</div>
				    </div>
	          </form>

	<table>
		<tr bgcolor="#cccccc">
			<td>email</td>
			<td>date</td>
			<td>time</td>
			<td>delete</td>
			<td>update</td>
		</tr>

		<?php
		$conn=mysqli_connect("localhost","root","","userlog");

		$sql=mysqli_query($conn,"SELECT * from subscribers");
		while($row=mysqli_fetch_array($sql))
		{
			echo'
			<tr>
			<td>'.$row['email'].'</td>
			<td>'.$row['date'].'</td>
			<td>'.$row['time'].'</td>
			<td><a href="deleteadm.php?delete='.$row['id'].'">Delete</a>
			<td><a href="updateadm.php?update='.$row['id'].'">Update</a>
			</tr>';
		}

        ?>
    </table>
		
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li> 
								<a href="index.php"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							
							<li> 
								<a href="customers.php"><i class="la la-users"></i> <span>Customers</span></a>
							</li>
							<li class="active"> 
								<a href="subscribers.php"><i class="la la-thumbs-up"></i> <span>Subscribers</span></a>
							</li>
							<li>
								<a href="category.php"><i class="la la-tags"></i> <span>Category</span></a>
							</li>
							<li>
								<a href="products.php"><i class="la la-shopping-cart"></i> <span>Products</span></a>
							</li>
							<li> 
								<a href="orders.php"><i class="la la-newspaper-o"></i> <span>Orders</span></a>
							</li>
							<li> 
								<a href="profile.php"><i class="la la-user"></i> <span>Profile</span></a>
							</li>
							<li> 
								<a href="update.php"><i class="la la-refresh"></i> <span>Update</span></a>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
            
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
		<script type="text/javascript" src="assets/plugins/summernote/dist/summernote.min.js"></script>
        <script>
		$(document).ready(function(){
			$('.summernote').summernote({
				height: 200,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: false                 // set focus to editable area after initializing summernote
			});
		});
        </script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 07:16:33 GMT -->
</html>
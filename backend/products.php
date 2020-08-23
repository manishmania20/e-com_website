<?php
  $conn=mysqli_connect("localhost","root","","userlog");
  if(isset($_POST['submit']))
     {
        $pro_name=$_POST['pro_name'];
        $pro_qty=$_POST['pro_qty'];
        $pro_price=$_POST['pro_price'];
        $cat_name=$_POST['cat_name'];
        $cat_status=$_POST['cat_status'];
        $pro_image=$_FILES['pro_image']['name'];
        $tmp=$_FILES['pro_image']['tmp_name'];
	    $path='uploads/'.$pro_image;

        
        
        $sql="INSERT into products(pro_name,pro_qty,pro_price,cat_name,cat_status,pro_image) values('$pro_name','$pro_qty','$pro_price','$cat_name','$cat_status','$pro_image')";
        $result=mysqli_query($conn,$sql);
     
     if($sql)
     {
     	move_uploaded_file($tmp, $path);
     	echo "<script>alert('success')</script>";
     }
     else
     {
     	echo "<script>alert('failed')</script>";
     }
      }
     

?>



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
        <style>
        	.col-xs-4
        	{
        		text-align: right;
        		font-family: verdana;
        	}
        	.btn 
            {
            	position: absolute;
            	top:50%;
            	margin:auto;
            	right:70%;
            }
            table.center
            {
              margin-left: auto;
              margin-right: auto;
              width:80%;
            }
            .container-fluid
            {
            	overflow-y: scroll;
            	overflow-x: scroll;
            }

        </style>
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
                </div>
                <div class="page-wrapper">
              <form control="" method="post">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title" style="text-align: right;">Manage</h4>
						</div>
				    </div>
	          </form>
	          


	<table class="center">
		<tr bgcolor="#cccccc">
			<td>pro_name</td>
			<td>pro_qty</td>
			<td>pro_price</td>
			<td>cat_name</td>
			<td>cat_status</td>
			<td>pro_image</td>
		</tr>

		<?php
		$conn=mysqli_connect("localhost","root","","userlog");

		$sql=mysqli_query($conn,"SELECT * from products");
		while($row=mysqli_fetch_array($sql))
		{
			echo'
			<tr>
			<td>'.$row['pro_name'].'</td>
			<td>'.$row['pro_qty'].'</td>
			<td>'.$row['pro_price'].'</td>
			<td>'.$row['cat_name'].'</td>
			<td>'.$row['cat_status'].'</td>
			<td><img src="uploads/'.$row['pro_image'].'" style="height:100px; width:100px" ></td>
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
							<li> 
								<a href="subscribers.php"><i class="la la-thumbs-up"></i> <span>Subscribers</span></a>
							</li>
							<li>
								<a href="category.php"><i class="la la-tags"></i> <span>Category</span></a>
							</li>
							<li class="active">
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
        </div>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h1 class="page-title"><strong>Products:-</strong></h1>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Add Product</a>
						</div>
					</div>
				</div>
		   </div>
		
    
			<div id="create_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Product Details</h4>
						<div class="modal-body">
							<form control="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Product Name</label>
											<input class="form-control" type="text" name="pro_name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Product Quantity</label>
											<input class="form-control" type="number" name="pro_qty">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Product Price</label>
											<input class="form-control" type="number" name="pro_price">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Category</label>
										<select class="form-control"  name="cat_name">
											<?php

											$conn=mysqli_connect("localhost","root","","userlog");

											$sql=mysqli_query($conn,"SELECT * from category");
											while($row=mysqli_fetch_array($sql))
											{
											echo'
			
											<option>'.$row['cat_name'].'</option>';
			
											}


											?>
                                             
										</select>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Status</label>
											<select class="form-control" name="cat_status">
										     <option value="yes">yes</option>
										     <option value="no">no</option>
                                            </select>
                                        </div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Image</label>
											<input class="form-control" type="file" name="pro_image">
										</div>
									</div>
								</div>
								   <button type="submit" name="submit" value="submit">Submit</button>
							</form>
						</div>
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
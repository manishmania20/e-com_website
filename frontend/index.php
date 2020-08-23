<?php
// session_start(); 

?>
<html class="no-js" lang="en">
    
<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 02:56:49 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Naturecircle - Premium eCommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- All css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/ie7.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    </head>
    <body>
        
        <!-- Header Area Start -->
  <?php 
  include ('header.php'); 
  ?>
            <!-- Mobile Menu Area End -->
    <!--Start of Login Form-->
<?php
$conn=mysqli_connect("localhost","root","","userlog");

if(isset($_POST['Login']))
{

$email=$_POST['email'];

$password=$_POST['password'];

    $verify_email=mysqli_query($conn,"SELECT * from users where email='$email'");

    $verify_email_password=mysqli_query($conn,"SELECT * from users where email='$email' and password='$password'");
    $row=mysqli_fetch_array($verify_email_password);
$name=$row['first_name'];

    $_SESSION['id']=$row['id'];
   $_SESSION['username']=$name;

    if(mysqli_num_rows($verify_email)<1)
    {

    echo  "<script>alert('E-mail is not registered')</script>";
    }
    elseif(mysqli_num_rows($verify_email_password)<1)
    {

    echo "<script>alert('Password is incorrect')</script>";
}

    else{
        $sql=mysqli_query($conn,"SELECT * from users where email='$email' and password='$password'");

        if($sql)
        {
            echo "<script>alert('Login success'),
            window.location.href='index.php'</script>";

    //header("Location:index-2.php");   
         }

    }

}

?>

            <div class="modal fade" id="login_box" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content">
								<h2>Login to your account</h2>
								<form action="" method="post">
									<div class="form-box">
										<input type="email" placeholder="email" name="email">
										<input type="password" placeholder="password" name="password">
									</div>
									<div class="checkbox-link">
									    <div class="left-col">
								            <input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
									    </div>
									    <div class="right-col"><a href="">Forget Password?</a></div>
									</div>
								    <button type="submit" value="submit" name="Login">Sign In</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Login Form-->
            <!--Start of Register Form-->
            <?php
            $conn=mysqli_connect("localhost","root","","userlog");
            if(isset($_POST['submit']))
            {
              $first_name=$_POST['first_name'];
              $last_name=$_POST['last_name'];
              $email=$_POST['email'];
              $password=$_POST['password'];
              $confirm_password=$_POST['confirm_password'];

              $sql=mysqli_query($conn,"insert into users(first_name,last_name,email,password)values('$first_name','$last_name','$email','$password')");

              if($sql)
              {
                echo "<script>alert('register success')</script>";
              }
              else
              {
                echo "<script>alert('error')</script>";
              }
            }
            ?>
            <div class="modal fade" id="register_box" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content">
								<h2>Sign Up</h2>
								<form action="" method="post">
									<div class="form-box">
										<input type="text" placeholder="first name" name="first_name">
										<input type="text" placeholder="last name" name="last_name">
										<input type="email" placeholder="email" name="email">
										<input type="password" placeholder="password" name="password">
										<input type="password" placeholder="confirm password" name="confirm_password">
									</div>
									<div class="checkobx-link">
									    <div class="left-col">
								            <input type="checkbox" id="remember_reg"><label for="remember_reg">Remember Me</label>
									    </div>
									</div>
								    <button class="text-uppercase" type="submit" name="submit">Register</button>
								</form>
							</div>
                        </div>	
                    </div>	
                </div>
            </div>
            <!--End of Register Form-->
        </header>
        <!-- Header Area End -->
        <!-- Hero Area Start -->
        <div class="ht-hero-section fix ht-hero-two">
            <div class="ht-hero-slider">
                <!-- Single Slide Start -->
                <div class="ht-single-slide" style="background-image: url(assets/img/slider/3.jpg)">
                    <div class="ht-hero-content-one container">
                        <h3>Organic products</h3>
                        <h1 class="cssanimation leDoorCloseLeft sequence">Fresh mango</h1>
                        <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>
                        <a href="shop.php" class="default-btn large circle blue hover-blue uppercase">Shop now</a>
                    </div>
                </div>
                <!-- Single Slide End -->
                <!-- Single Slide Start -->
                <div class="ht-single-slide" style="background-image: url(assets/img/slider/4.jpg)">
                    <div class="ht-hero-content-one container">
                        <h3>Organic products</h3>
                        <h1 class="cssanimation leDoorCloseLeft sequence">Coconut Oil</h1>
                        <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>
                        <a href="shop.php" class="default-btn">Shop now</a>
                    </div>
                </div>
                <!-- Single Slide End -->
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Shop Banner Area Start -->
        <div class="shop-banner-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="shop-banner-img">
                            <a href="shop.php"><img src="assets/img/banner/2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shop-banner-img">
                            <a href="shop.php"><img src="assets/img/banner/3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Banner Area End -->
        <!-- Protuct Area Start -->
        <div class="product-area bg-1 pt-110 pb-80 product-two-area">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-img d-flex justify-content-center">
                        <img src="assets/img/icon/title.png" alt="">
                    </div>
                    <h2><span>Organic </span>featured products</h2>
                </div>
            </div>
            <div class="container">
                <div class="product-tab-list nav fix" role="tablist">
                    <a class="active" href="#tab1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="tab1">vegetables</a>
                    <a href="#tab2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab2">fruits</a>
                    <a href="#tab3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab3">juices</a>
                    <a href="#tab4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab4">bread</a>
                </div>
                <div class="tab-content text-center">
                    <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                        <div class="product-carousel">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/1.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/1.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Juicy Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Grape</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/2.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/2.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Banana</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/9.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/9.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/3.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/3.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Red Capsicum</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/8.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/8.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Pine Apple</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/4.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/4.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Rippen Mango</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/7.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/7.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Tangerin Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span> 
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/5.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/5.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Farm's Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/6.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/6.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Coconut</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span> 
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="product-carousel">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/9.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/9.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/10.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/10.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Grape</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/11.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/11.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Farm's Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/14.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/14.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span> 
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/15.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/15.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Juicy Orange</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span> 
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/16.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/16.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Kiwi Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="product-carousel">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/17.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/17.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Red Beet</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/18.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/18.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Spring Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/19.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/19.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Tomato</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/20.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/20.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Juicy Watermelon</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span> 
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/7.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/7.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Tangerin Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span> 
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/8.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/8.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Pine Apple</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/1.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/1.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Juicy Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/2.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/2.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Banana</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <div class="product-carousel">
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/14.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/14.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$50.00</span> 
                                            <span class="old-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/15.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/15.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Juicy Orange</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$44.00</span> 
                                            <span class="old-price">$47.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/9.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/9.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$86.00</span> 
                                            <span class="old-price">$92.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/12.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$20.00</span> 
                                            <span class="old-price">$28.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/13.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Green Pee's</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$50.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/10.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/10.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Fresh Grape</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$40.00</span> 
                                            <span class="old-price">$43.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/11.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/11.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Farm's Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="shop.php">
                                            <img src="assets/img/product/16.jpg" alt="">
                                        </a>  
                                        <div class="product-hover">
                                            <ul class="hover-icon-list">
                                                <li>
                                                    <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon icon-Restart"></i></a>
                                                </li>
                                                <li><a href="assets/img/product/16.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                            </ul>
                                            <button type="button" class="p-cart-btn">Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.php">Kiwi Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$33.00</span> 
                                            <span class="old-price">$37.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Protuct Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area bg-5 fix pt-70 pb-190 banner-two-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner-text pt-130">
                            <h3>Cold Process <span>Organic</span></h3>
                            <h1>Strawberry</h1>
                            <h2>
                                <img src="assets/img/icon/mark.png" alt="">
                                <span>Buy 1 get 1 free</span>
                            </h2>
                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                            <a href="shop.php" class="default-btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Timer Product Area Start -->
        <div class="timer-product-area bg-3 pt-110 pb-80">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <div class="section-img d-flex justify-content-center">
                        <img src="assets/img/icon/title.png" alt="">
                    </div>
                    <h2><span>Organic </span>deal of the days</h2>
                </div>
            </div>
            <div class="container">
                <div class="custom-row">
                    <div class="timer-carousel">
                        <div class="custom-col text-center">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.php">
                                        <img src="assets/img/product/1.jpg" alt="">
                                    </a>  
                                    <div class="timer">
                                        <div data-countdown="2020/05/08" class="timer-grid"></div>
                                    </div>
                                    <div class="product-hover">
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.php">Fresh Grape</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$204.00</span> 
                                        <span class="old-price">$280.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col text-center">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.php">
                                        <img src="assets/img/product/2.jpg" alt="">
                                    </a>  
                                    <div class="timer">
                                        <div data-countdown="2019/05/12" class="timer-grid"></div>
                                    </div>
                                    <div class="product-hover">
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.php">Farm's Banana</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$33.00</span> 
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col text-center">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.php">
                                        <img src="assets/img/product/3.jpg" alt="">
                                    </a>  
                                    <div class="timer">
                                        <div data-countdown="2018/12/12" class="timer-grid"></div>
                                    </div>
                                    <div class="product-hover">
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.php">Red Capsicum</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$120.00</span> 
                                        <span class="old-price">$160.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col text-center">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.php">
                                        <img src="assets/img/product/4.jpg" alt="">
                                    </a>  
                                    <div class="timer">
                                        <div data-countdown="2018/12/1" class="timer-grid"></div>
                                    </div>
                                    <div class="product-hover">
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.php">Juicy Mango</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$90.00</span> 
                                        <span class="old-price">$100.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Timer Product Area End -->
        <!-- Testimonial Area Start -->
        <div class="testimonial-area pt-110 pb-95">
            <div class="container">
                <div class="testimonial-slider-wrapper">
                    <div class="text-carousel text-center">
                        <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                            <p>This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed ero..</p>
                        </div>
                        <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat.</p>
                        </div>
                        <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                            <p>Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                            <p>This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed ero..</p>
                        </div>
                        <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat.</p>
                        </div>
                        <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                            <p>Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="image-carousel">
                        <div class="testi-img">
                            <img src="assets/img/testimonial/1.png" alt="">
                            <h4>Dewey Tetzlaff</h4>
                        </div>
                        <div class="testi-img">
                            <img src="assets/img/testimonial/2.png" alt="">
                            <h4>Rebecka Filson</h4>
                        </div>
                        <div class="testi-img">
                            <img src="assets/img/testimonial/3.png" alt="">
                            <h4>Alva Ono</h4>
                        </div>
                        <div class="testi-img">
                            <img src="assets/img/testimonial/1.png" alt="">
                            <h4>Dewey Tetzlaff</h4>
                        </div>
                        <div class="testi-img">
                            <img src="assets/img/testimonial/2.png" alt="">
                            <h4>Rebecka Filson</h4>
                        </div>
                        <div class="testi-img">
                            <img src="assets/img/testimonial/3.png" alt="">
                            <h4>Alva Ono</h4>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- Testimonial Area End -->
        <!-- Blog Area Start -->
        <div class="blog-area pb-95">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <div class="section-img d-flex justify-content-center">
                        <img src="assets/img/icon/title.png" alt="">
                    </div>
                    <h2><span>Organic </span>from our blog</h2>
                </div>
            </div>
            <div class="container">
                <div class="custom-row">
                    <div class="blog-carousel">
                        <div class="custom-col text-center">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="assets/img/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                                    <div class="post-meta">
                                        <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                        <span class="post-date"> - Oct 30,2018</span>
                                    </div>
                                    <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk make it quite popular.</p>
                                    <a href="blog-details.html" class="default-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col text-center">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="assets/img/blog/2.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">The most healthful food you can eat.</a></h4>
                                    <div class="post-meta">
                                        <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                        <span class="post-date"> - Sep 11,2018</span>
                                    </div>
                                    <p>Health benefits of apple include improved digestion, prevention of stomach disorders, gallstones.</p>
                                    <a href="blog-details.html" class="default-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col text-center">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="assets/img/blog/3.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Delicious and nutritious vegetable.</a></h4>
                                    <div class="post-meta">
                                        <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                        <span class="post-date"> - Apr 22,2018</span>
                                    </div>
                                    <p>Research shows drinking beetroot juice benefit digestion, boost athletic performance. They are a good source.</p>
                                    <a href="blog-details.html" class="default-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col text-center">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog-details.html"><img src="assets/img/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                                    <div class="post-meta">
                                        <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                        <span class="post-date"> - Oct 30,2018</span>
                                    </div>
                                    <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk make it quite popular.</p>
                                    <a href="blog-details.html" class="default-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!-- Footer Area Start -->
        <footer class="footer-area">
            <!-- Footer Top Area Start -->
            <div class="footer-top bg-4 pt-120 pb-120">
                <!-- Newsletter Area Start -->
                <?php
                   $conn=mysqli_connect("localhost","root","","userlog");
                  if(isset($_POST['subscribe']))
                 {
                   $email=$_POST['email'];

                    date_default_timezone_set('Asia/Kolkata');
                    $date=date("d-m-y");
                    $time=date("h:i:s");
                   $sql=mysqli_query($conn,"INSERT into subscribers(email,date,time)values('$email','$date','$time')");

                

                if($sql)
                {
                    echo "<script>alert('success')</script>";
                }
                else
                {
                    echo "<script>alert('failed')</script>";
                }

                 }
                ?>

                
                    <div class="newsletter-area">
                        <div class="container text-center">
                            <div class="newsletter-container">
                                <i class="la la-thumbs-up"><h2>Subscribe for services</h2>
                                <p>Get e-mail updates about our latest shop and special offers.</p>
                                <div class="newsletter-form mc_embed_signup">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="Enter your email address here..." required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            
                                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="default-btn">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                            </div>
                        </div>
                    </div>
                <!-- Newsletter Area End -->
                <!-- Service Area Start -->
                <div class="service-area pt-50">
                    <div class="container">
                        <div class="service-container">
                            <div class="service-content">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-service">
                                            <div class="service-image">
                                                <img src="assets/img/icon/rocket.png" alt="">
                                            </div>
                                            <div class="service-text">
                                                <h3>Free delivery</h3>
                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-service">
                                            <div class="service-image">
                                                <img src="assets/img/icon/money.png" alt="">
                                            </div>
                                            <div class="service-text">
                                                <h3>Money guarantee</h3>
                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single-service">
                                            <div class="service-image">
                                                <img src="assets/img/icon/support.png" alt="">
                                            </div>
                                            <div class="service-text">
                                                <h3>Online support</h3>
                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Service Area End -->
                <!-- Footer Widget Area Start -->
                <div class="footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single-footer-widget">
                                    <div class="footer-logo">
                                        <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    <div class="footer-text">
                                        <span><i class="icon icon-Pointer"></i>Address : No 40 Baria Sreet 133/2, NewYork, USA.</span>
                                        <span><i class="icon icon-Phone"></i>Phone : +(1234) 567 890</span>
                                        <span><i class="icon icon-Mail"></i>Email : demo@naturecircle.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="single-footer-widget">
                                    <h3>Products</h3>
                                    <ul class="footer-widget-list">
                                        <li><a href="shop.php">Prices drop</a></li>
                                        <li><a href="shop.php">New products</a></li>
                                        <li><a href="shop.php">Best sales</a></li>
                                        <li><a href="shop.php">Stores</a></li>
                                        <li><a href="">Login</a></li>
                                        <li><a href="">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3">
                                <div class="single-footer-widget">
                                    <h3>Our company</h3>
                                    <ul class="footer-widget-list">
                                        <li><a href="#">Delivery</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                        <li><a href="#">Documentation</a></li>
                                        <li><a href="#">Secure payment</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="shop.php">Stores</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-footer-widget">
                                    <h3>Instagram</h3>
                                    <div class="instagram-image">
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/2.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/3.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/4.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/5.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/6.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/7.jpg" alt=""></a>
                                        </div>
                                        <div class="single-insta-img">
                                            <a href="#"><img src="assets/img/instagram/8.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <a href="#">Follow our instagram <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area End -->
            </div>
            <!-- Footer Top Area End -->
            <!-- Footer Bottom Area Start -->
            <div class="footer-bottom-area pt-15 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex col-md-6">
                            <div class="footer-text-bottom">
                                <p>Copyright &copy; <a href="#">Naturecircle</a>. All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-img d-flex justify-content-end">
                                <img src="assets/img/payment.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area End -->
        </footer>
        <!-- Footer Area End -->
        
        <!-- QUICKVIEW PRODUCT -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                    <div class="quick-view-container">
                        <div class="column-left">
                            <div class="tab-content product-details-large" id="myTabContent">
                                <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-5">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-6">
                                    <div class="single-product-img">
                                        <img src="assets/img/product/6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-menu">
                                <div class="nav single-slide-menu" role="tablist">
                                    <div class="single-tab-menu">
                                        <a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="assets/img/product/1.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="assets/img/product/2.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="assets/img/product/3.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="assets/img/product/4.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="assets/img/product/5.jpg" alt=""></a>
                                    </div>
                                    <div class="single-tab-menu">
                                        <a data-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img src="assets/img/product/6.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="column-right">
                            <div class="quick-view-text">
                                <h2>Curabitur a purus</h2>
                                <h3 class="q-product-price">$34.00<span class="old-price">$37.00</span></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                <div class="input-cart">
                                    <input value="1" type="number">
                                    <button class="default-btn">Add to cart</button>
                                </div>
                                <div class="share-product">
                                    <h4>Share this product</h4>
                                    <div class="social-link">
                                        <a href="#" target="_blank" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" target="_blank" class="twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank" class="pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#" target="_blank" class="google">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#" target="_blank" class="linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICKVIEW PRODUCT -->
        
        <!-- All js here -->
        <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 02:57:44 GMT -->
</html>
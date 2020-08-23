<!doctype php>
<php class="no-js" lang="en">
    
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
        include ('header2.php');
        ?>
        <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-12 text-center">
            <div class="container">
                <h1>Checkout</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- coupon-area start -->
        <div class="coupon-area pt-110">
            <div class="container">
                <div class="coupon-accordion">
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row-last">
                                    <label>Password  <span class="required">*</span></label>
                                    <input type="text" />
                                </p>
                                <p class="form-row">					
                                    <input type="submit" value="Login" />
                                    <label>
                                        <input type="checkbox" />
                                         Remember me 
                                    </label>
                                </p>
                                <p class="lost-password">
                                    <a href="#">Lost your password?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input type="text" placeholder="Coupon code" />
                                    <input class="default-btn" type="submit" value="Apply Coupon" />
                                </p>
                            </form>
                        </div>
                    </div>					
                </div>
            </div>
        </div>
        <!-- coupon-area end -->
        <!-- checkout-area start -->
        <div class="checkout-area pb-90">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="checkbox-form">						
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="country-select">
                                            <label>Country <span class="required">*</span></label>
                                            <select>
                                              <option value="volvo">Bangladesh</option>
                                              <option value="saab">Algeria</option>
                                              <option value="mercedes">Afghanistan</option>
                                              <option value="audi">Ghana</option>
                                              <option value="audi2">Albania</option>
                                              <option value="audi3">Bahrain</option>
                                              <option value="audi4">Colombia</option>
                                              <option value="audi5">Dominican Republic</option>
                                            </select> 										
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>	
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>	
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">									
                                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout-form-list">
                                            <label>Phone  <span class="required">*</span></label>	
                                            <input type="text" placeholder="Postcode / Zip" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list create-acc">	
                                            <input id="cbox" type="checkbox" />
                                            <label for="cbox">Create an account?</label>
                                        </div>
                                        <div id="cbox_info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <label>Account password  <span class="required">*</span></label>
                                            <input type="password" placeholder="password" />	
                                        </div>
                                    </div>							
                                </div>
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <input id="ship-box" type="checkbox" />
                                            <label for="ship-box">Ship to a different address?</label>
                                        </h3>
                                    </div>
                                    <div id="ship-box-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                        <option value="volvo">bangladesh</option>
                                                        <option value="saab">Algeria</option>
                                                        <option value="mercedes">Afghanistan</option>
                                                        <option value="audi">Ghana</option>
                                                        <option value="audi2">Albania</option>
                                                        <option value="audi3">Bahrain</option>
                                                        <option value="audi4">Colombia</option>
                                                        <option value="audi5">Dominican Republic</option>
                                                    </select> 										
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>	
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>	
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="checkout-form-list">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="checkout-form-list">	
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="checkout-form-list">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout-form-list">
                                                    <label>State / County <span class="required">*</span></label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input type="email" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkout-form-list">
                                                    <label>Phone  <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>								
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Order Notes</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                        </div>									
                                    </div>
                                </div>													
                            </div>
                        </div>	
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>							
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$165.00</span>
                                                </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Vestibulum dictum magna	<strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">$50.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">$215.00</span></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <label>
                                                                Flat Rate: <span class="amount">$7.00</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td>
                                                    <strong><span class="amount">$215.00</span></strong>
                                                </td>
                                            </tr>								
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel">
                                            <div class="panel-heading" id="headingOne">
                                                <a href="#checkout" data-toggle="collapse" data-parent="#accordion">Cheque Payment</a>
                                            </div>
                                            <div id="checkout" class="collapse show">
                                                <div class="panel-body"> 
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading" id="headingTwo">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#billing">
                                                    PayPal Payment
                                                    <img src="assets/img/payment-paypa.png" alt="">
                                                </a>
                                            </div>
                                            <div id="billing" class="collapse">
                                                <div class="panel-body">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input class="default-btn" type="submit" value="Place order" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout-area end -->	
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
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">My Account</a></li>
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
                                        <li><a href="contact.php">Contact us</a></li>
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
        
        <!-- All js here -->
        <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 02:59:37 GMT -->
</php>
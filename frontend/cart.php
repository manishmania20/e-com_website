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
                <h1>My Cart</h1>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Cart Area Start -->
        <div class="cart-area table-area pt-110 pb-95">
            <div class="container">
                <div class="table-responsive">
                    <table class="table product-table text-center">
                        <thead>
                            <tr>
                                <th class="table-remove">remove</th>
                                <th class="table-image">image</th>
                                <th class="table-p-name">product</th>
                                <th class="table-p-price">price</th>
                                <th class="table-p-qty">quantity</th>
                                <th class="table-total">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-remove"><button><i class="fa fa-trash"></i></button></td>
                                <td class="table-image"><a href="product-details.php"><img src="assets/img/product/3.jpg" alt=""></a></td>
                                <td class="table-p-name"><a href="product-details.php">Habitasse dictumst</a></td>
                                <td class="table-p-price"><p>$65.00</p></td>
                                <td class="table-p-qty"><input value="1" name="cart-qty" type="number"></td>
                                <td class="table-total"><p>$65.00</p></td>
                            </tr>
                            <tr>
                                <td class="table-remove"><button><i class="fa fa-trash"></i></button></td>
                                <td class="table-image"><a href="product-details.php"><img src="assets/img/product/4.jpg" alt=""></a></td>
                                <td class="table-p-name"><a href="product-details.php">Kaoreet lobortis</a></td>
                                <td class="table-p-price"><p>$95.00</p></td>
                                <td class="table-p-qty"><input value="1" name="cart-qty" type="number"></td>
                                <td class="table-total"><p>$95.00</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-bottom-wrapper">
                    <div class="table-coupon d-flex fix justify-content-start">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply coupon</button>
                    </div>
                    <div class="table-update d-flex justify-content-end">
                        <button type="button" disabled>Update cart</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="table-total-wrapper d-flex justify-content-end pt-60">
                    <div class="table-total-content">
                        <h2>Cart totals</h2>
                        <div class="table-total-amount">
                            <div class="single-total-content d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span class="c-total-price">$160.00</span>
                            </div>
                            <div class="single-total-content d-flex justify-content-between">
                                <span>Shipping</span>
                                <span class="c-total-price"><span>Flat Rate:</span> $5.00</span>
                            </div>
                            <div class="single-total-content d-flex justify-content-end">
                                <a href="#">Calculate shipping</a>
                            </div>
                            <div class="single-total-content d-flex justify-content-between">
                                <span>Total</span>
                                <span class="c-total-price">$165.00</span>
                            </div>
                            <a href="checkout.php">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Area End -->
        <!-- Footer Area Start -->
        <footer class="footer-area">
            <!-- Footer Top Area Start -->
            <div class="footer-top bg-4 pt-120 pb-120">
                <!-- Newsletter Area Start -->
                    <div class="newsletter-area">
                        <div class="container text-center">
                            <div class="newsletter-container">
                                <h2>Subscribe Newsletter.</h2>
                                <p>Get e-mail updates about our latest shop and special offers.</p>
                                <div class="newsletter-form mc_embed_signup">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter you email address here..." required>
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

<!-- Mirrored from demo.hasthemes.com/naturecircle-v2/naturecircle/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 02:59:36 GMT -->
</php>
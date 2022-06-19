<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Supermarket</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/favicon.svg'); ?>" />

        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/demo/assets/css/plugins/animate.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/demo/assets/css/main.css'); ?>" />
        <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/demo/assets/css/plugins/slider-range.css'); ?>" />
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Jquery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/sweetalert.min.js'); ?>"></script>
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    </head>

    <body>
        <!-- Modal -->
        <!-- <div class="modal fade custom-modal" id="onloadModal" tabindex="-1" aria-labelledby="onloadModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <?php foreach($timer_products as $key=> $product) { ?>
                            <?php $getreview = 0; $total = 0; foreach($product['reviews'] as $key => $review) { 
                                $total += $review['rating'];
                                $totalreview = count($product['reviews']);
                                $getreview = ($total/$totalreview)*20;
                            }?> 
                        <div class="deal" style="background-image: url(<?php echo $this->Url->build('/webroot/uploads/products/'.$product['image_1']); ?>">
                            <div class="deal-top">
                                <h6 class="mb-10 text-brand-2">Deal of the Day</h6>
                            </div>
                            <div class="deal-content detail-info">
                                <h4 class="product-title"><a href="<?php echo $this->Url->build('/products/view/'.$product['slug']); ?>" class="text-heading"><?php echo $product['product_name']; ?></a></h4>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">₹ <?php echo $product['product_variants']['0']['price']; ?></span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15"><?php echo $product['product_variants']['0']['offer_percentage']; ?>% Off</span>
                                            <span class="old-price font-md ml-15">₹52</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="deal-bottom">
                                <p class="mb-20">Hurry Up! Offer End In:</p>
                                <div class="deals-countdown pl-5" data-countdown="<?php echo date("Y-m-d H:i:s",strtotime($product->deals_end_day)); ?>">
                                    <span class="countdown-section"><span class="countdown-amount hover-up">03</span><span class="countdown-period"> days </span></span><span class="countdown-section"><span class="countdown-amount hover-up">02</span><span class="countdown-period"> hours </span></span><span class="countdown-section"><span class="countdown-amount hover-up">43</span><span class="countdown-period"> mins </span></span><span class="countdown-section"><span class="countdown-amount hover-up">29</span><span class="countdown-period"> sec </span></span>
                                </div>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <a href="?php echo $this->Url->build('/products/view/'.$product['slug']); ?>" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Quick view -->
        <header class="header-area header-style-1 header-height-2">
            <!-- <div class="mobile-promotion">
                <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
            </div> -->
            <div class="header-top header-top-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info">
                                <ul>
                                    <li><a href="<?php echo $this->Url->build('/users/dashboard'); ?>">My Account</a></li>
                                    <?php if( empty( $this->request->getSession()->read('Auth.Users') )){ ?>
                                    <li><a href="<?php echo $this->Url->build('/users/login'); ?>">Login/Register</a></li>
                                    <?php } else { ?>
                                    <li><a href="<?php echo $this->Url->build('/users/logout'); ?>">Logout</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="text-center">
                                <div id="news-flash" class="d-inline-block">
                                    <ul>
                                        <li><?php echo $get_header_marketing['text1']; ?></li>
                                        <li><?php echo $get_header_marketing['text2']; ?></li>
                                        <li><?php echo $get_header_marketing['text3']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="header-info header-info-right">
                                <ul>
                                    <li>Need help? Call Us: <a href="tel: <?php echo $get_settings['phonenumber']; ?>"><strong class="text-brand">(+91)- <?php echo $get_settings['phonenumber']; ?></strong></a></li>
                                    <!-- <li>
                                        <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
                                        <ul class="language-dropdown">
                                            <li>
                                                <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/flag-fr.png'); ?>" alt="" />India</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/flag-dt.png'); ?>" alt="" />Deutsch</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/flag-ru.png'); ?>" alt="" />Pусский</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a class="language-dropdown-active" href="#">₹INR <!-- <i class="fi-rs-angle-small-down"></i> --></a>
                                        <!-- <ul class="language-dropdown">
                                            <li>
                                                <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/flag-fr.png'); ?>" alt="" />INR</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="<?php echo $this->Url->build('/'); ?>"><img src="<?php echo $this->Url->build('/webroot/uploads/logo/'.$get_settings['image']); ?>" /></a>
                        </div>
                        <div class="header-right">
                            <div class="search-style-2">
                                <form action="#">
                                    <select class="select-active">
                                        <option>All Categories</option>
                                        <?php foreach ($product_categories as $key => $product_category) { ?>
                                        <option><a href="<?php echo $this->Url->build('/products/category/'.$product_category['slug']); ?>"><?php echo $product_category['name']; ?></a></option>
                                        <?php } ?>
                                    </select>
                                    <input type="text" placeholder="Search for items..." />
                                </form>
                            </div>
                            <div class="header-action-right">
                                <div class="header-action-2">
                                    <!-- <div class="search-location">
                                        <form action="#">
                                            <select class="select-active">
                                                <option>Your Location</option>
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>Arizona</option>
                                                <option>Delaware</option>
                                                <option>Florida</option>
                                                <option>Georgia</option>
                                                <option>Hawaii</option>
                                                <option>Indiana</option>
                                                <option>Maryland</option>
                                                <option>Nevada</option>
                                                <option>New Jersey</option>
                                                <option>New Mexico</option>
                                                <option>New York</option>
                                            </select>
                                        </form>
                                    </div> -->
                                    <!-- <div class="header-action-icon-2">
                                        <a href="shop-compare.html">
                                            <img class="svgInject" alt="Nest" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-compare.svg'); ?>" />
                                            <span class="pro-count blue">3</span>
                                        </a>
                                        <a href="shop-compare.html"><span class="lable ml-0">Compare</span></a>
                                    </div> -->
                                    <!-- <div class="header-action-icon-2">
                                        <a href="shop-wishlist.html">
                                            <img class="svgInject" alt="Nest" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-heart.svg'); ?>" />
                                            <span class="pro-count blue">6</span>
                                        </a>
                                        <a href="shop-wishlist.html"><span class="lable">Wishlist</span></a>
                                    </div> -->
                                    <div class="header-action-icon-2">
                                        <a class="mini-cart-icon" href="<?php echo $this->Url->build('/products/my_cart'); ?>">
                                            <img alt="Nest" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-cart.svg'); ?>" />
                                            <span class="pro-count blue"><?php echo $get_count_cart; ?></span>
                                        </a>
                                        <a href="<?php echo $this->Url->build('/products/my_cart'); ?>"><span class="lable">Cart</span></a>
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a href="page-account.html">
                                            <img class="svgInject" alt="Nest" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-user.svg'); ?>" />
                                        </a>
                                        <a href="#"><span class="lable ml-0">Account</span></a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $this->Url->build('/users/dashboard'); ?>"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                                </li>
                                                <!-- <li>
                                                    <a href="page-account.html"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                                </li>
                                                <li>
                                                    <a href="page-account.html"><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                                </li>
                                                <li>
                                                    <a href="shop-wishlist.html"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="page-account.html"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                                </li> -->
                                                <li>
                                                    <a href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-bottom-bg-color sticky-bar">
                <div class="container">
                    <div class="header-wrap header-space-between position-relative">
                        <div class="logo logo-width-1 d-block d-lg-none">
                            <a href="index.html"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/logo.svg'); ?>" alt="logo" /></a>
                        </div>
                        <div class="header-nav d-none d-lg-flex">
                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="<?php echo $this->Url->build('/'); ?>">Home</a></li>
                                        <li><a class="active" href="<?php echo $this->Url->build('/products'); ?>">All Products</a></li>

                                        <?php foreach ($product_categories as $key => $product_category) { ?>
                                        <li>
                                            <a class="active"><?php echo $product_category['name']; ?><i class="fi-rs-angle-down"></i></a>
                                            <ul class="sub-menu">
                                            <?php foreach ($product_category['product_sub_categories'] as $key => $ProductCategory) { ?>
                                                <li><a href="<?php echo $this->Url->build('/products/category/'.$ProductCategory['slug']); ?>"><?php echo $ProductCategory['name']; ?></a></li>
                                            <?php } ?>    
                                            </ul>
                                        </li>
                                        <?php } ?>                                    
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="hotline d-none d-lg-flex">
                            <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-headphone.svg'); ?>" alt="hotline" />
                            <p><a href="tel: <?php echo $get_settings['phonenumber']; ?>"><?php echo $get_settings['phonenumber']; ?></a><span>24/7 Support Center</span></p>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                        <div class="header-action-right d-block d-lg-none">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="#">
                                        <img alt="Nest" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-cart.svg'); ?>" />
                                        <span class="pro-count white">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/shop/thumbnail-3.jpg'); ?>" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                    <h3><span>1 × </span>$800.00</h3>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$383.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="<?php echo $this->Url->build('/'); ?>"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/logo.svg'); ?>" alt="logo" /></a>
                    </div>
                    <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                        <button class="close-style search-close">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-header-content-area">
                    <div class="mobile-search search-style-3 mobile-header-border">
                        <form action="#">
                            <input type="text" placeholder="Search for items…" />
                            <button type="submit"><i class="fi-rs-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu font-heading">
                               <li class="menu-item-has-children">
                                   <a href="<?php echo $this->Url->build('/'); ?>">Home</a>
                               </li> 
                               <?php foreach ($product_categories as $key => $product_category) { ?>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo $this->Url->build('/products/category/'.$product_category['slug']); ?>"><?php echo $product_category['name']; ?></a>
                                    <ul class="dropdown">
                                    <?php foreach ($product_category['product_sub_categories'] as $key => $ProductCategory) { ?>   
                                        <li><a href="<?php echo $this->Url->build('/products/category/'.$ProductCategory['slug']); ?>"><?php echo $ProductCategory['name']; ?></a></li>
                                    <?php } ?>    
                                    </ul>
                                </li>
                            <?php } ?>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-header-info-wrap">
                        <div class="single-mobile-header-info">
                            <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                        </div>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-15">Follow Us</h6>
                        <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-facebook-white.svg'); ?>" alt="" /></a>
                        <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-twitter-white.svg'); ?>" alt="" /></a>
                        <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-instagram-white.svg'); ?>" alt="" /></a>
                        <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-pinterest-white.svg'); ?>" alt="" /></a>
                        <a href="#"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-youtube-white.svg'); ?>" alt="" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2021 © Nest. All rights reserved. Powered by AliThemes.</div>
                </div>
            </div>
        </div>
        <!--End header-->
       <?= $this->fetch('content') ?>
       <footer class="main">
            <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="position-relative newsletter-inner">
                                <div class="newsletter-content">
                                    <h2 class="mb-20">
                                        Stay home & get your daily <br />
                                        needs from our shop
                                    </h2>
                                    <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand"><?php echo $get_social_links['company_name']; ?></span></p>
                                    <form class="form-subcriber d-flex">
                                        <input type="email" placeholder="Your emaill address" />
                                        <button class="btn" type="submit">Subscribe</button>
                                    </form>
                                </div>
                                <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/banner/banner-9.png'); ?>" alt="newsletter" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="featured section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                            <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                <div class="banner-icon">
                                    <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-1.svg'); ?>" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Best prices & offers</h3>
                                    <p>Orders $50 or more</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                <div class="banner-icon">
                                    <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-2.svg'); ?>" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Free delivery</h3>
                                    <p>24/7 amazing services</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                                <div class="banner-icon">
                                    <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-3.svg'); ?>" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Great daily deal</h3>
                                    <p>When you sign up</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                                <div class="banner-icon">
                                    <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-4.svg'); ?>" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Wide assortment</h3>
                                    <p>Mega Discounts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                                <div class="banner-icon">
                                    <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-5.svg'); ?>" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Easy returns</h3>
                                    <p>Within 30 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                            <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                                <div class="banner-icon">
                                    <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-6.svg'); ?>" alt="" />
                                </div>
                                <div class="banner-text">
                                    <h3 class="icon-box-title">Safe delivery</h3>
                                    <p>Within 30 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col">
                            <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                <div class="logo mb-30">
                                    <a href="index.html" class="mb-15"><img src="<?php echo $this->Url->build('/webroot/uploads/logo/'.$get_settings['image']); ?>" /></a>
                                    <!-- <p class="font-lg text-heading">Awesome grocery store website template</p> -->
                                </div>
                                <ul class="contact-infor">
                                    <li><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-location.svg'); ?>" alt="" /><strong>Address: </strong> <span><?php echo $get_social_links['address']; ?></span></li>
                                    <li><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-contact.svg'); ?>" alt="" /><strong>Call Us:</strong><span><a href="tel: <?php echo $get_settings['phonenumber']; ?>">(+91)- <?php echo($get_settings['phonenumber']); ?></a></span></li>
                                    <li><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-email-2.svg'); ?>" alt="" /><strong>Email:</strong><span><a href="mailto: <?php echo $get_settings['email_address']; ?>"><?php echo $get_social_links['email_address']; ?></a></span></li>
                                    <li><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-clock.svg'); ?>" alt="" /><strong>Hours:</strong><span><?php echo date("H:i",strtotime($get_settings->working_hours_start)); ?> - <?php echo date("H:i",strtotime($get_settings->working_hours_end)); ?>, Mon - Sat</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="widget-title">Company</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="<?php echo $this->Url->build('/pages/about-us'); ?>">About Us</a></li>
                            <!-- <li><a href="#">Delivery Information</a></li> -->
                            <li><a href="<?php echo $this->Url->build('/pages/privacy-policy'); ?>">Privacy Policy</a></li>
                            <li><a href="<?php echo $this->Url->build('/pages/terms-conditions'); ?>">Terms &amp; Conditions</a></li>
                            <li><a href="<?php echo $this->Url->build('/pages/contact-us'); ?>">Contact Us</a></li>
                            <li><a href="#">Support Center</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Account</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <!-- <li><a href="#">My Wishlist</a></li> -->
                            <li><a href="#">Track My Order</a></li>
                            <!-- <li><a href="#">Help Ticket</a></li> -->
                            <li><a href="#">Shipping Details</a></li>
                            <!-- <li><a href="#">Compare products</a></li> -->
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <?php foreach ($product_menu as $key => $product) { ?>
                                <li><a href="<?php echo $this->Url->build('/products/view/'.$product['slug']); ?>"><?php echo $product['product_name']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <p class="mb-20">Secured Payment Gateways</p>
                        <img class="" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/payment-method.png'); ?>" alt="" />
                    </div>
                </div>
            </section>
            <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                <div class="row align-items-center">
                    <div class="col-12 mb-30">
                        <div class="footer-bottom"></div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="link_width">
                            <p class="font-sm mb-0">&copy; <?php echo date('Y'); ?>, <strong class="text-brand"><?php echo $get_social_links['company_name']; ?></strong> - <?php echo $get_social_links['reserved_text']; ?></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 text-center d-none d-xl-block">
                        <div class="hotline d-lg-inline-flex mr-30">
                            <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/phone-call.svg'); ?>" alt="hotline" />
                            <p><?php echo $get_settings['phonenumber']; ?><span>Working <?php echo date("H:i",strtotime($get_settings->working_hours_start)); ?> - <?php echo date("H:i",strtotime($get_settings->working_hours_end)); ?> </span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 text-center d-none d-xl-block">
                        <div class="hotline d-lg-inline-flex">
                            <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/phone-call.svg'); ?>" alt="hotline" />
                            <p><?php echo $get_settings['phonenumber']; ?><span>24/7 Support Center</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 text-end d-none d-md-block">
                        <div class="mobile-social-icon">
                            <h6>Follow Us</h6>
                            <a href="<?php echo $get_social_links['facebook_link']; ?>" target="_blank"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-facebook-white.svg'); ?>" alt="" /></a>
                            <a href="<?php echo $get_social_links['twitter_link']; ?>" target="_blank"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-twitter-white.svg'); ?>" alt="" /></a>
                            <a href="<?php echo $get_social_links['instagram_link']; ?>" target="_blank"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-instagram-white.svg'); ?>" alt="" /></a>
                            <a href="<?php echo $get_social_links['pintrest_link']; ?>" target="_blank"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-pinterest-white.svg'); ?>" alt="" /></a>
                            <a href="<?php echo $get_social_links['youtube_link']; ?>" target="_blank"><img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/icon-youtube-white.svg'); ?>" alt="" /></a>
                        </div>
                        <!-- <p class="font-sm">Up to 15% discount on your first subscribe</p> -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="<?php echo $this->Url->build('/webroot/uploads/logo/'.$get_settings['loader_image']); ?>" alt="" />
                         <!-- <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/loading.gif'); ?>" alt="" /> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor JS-->
        <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/modernizr-3.6.0.min.js"></script> -->
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/vendor/jquery-3.6.0.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/vendor/jquery-migrate-3.3.0.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/vendor/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/slick.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/jquery.syotimer.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/waypoints.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/wow.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/perfect-scrollbar.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/magnific-popup.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/select2.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/counterup.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/jquery.countdown.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/images-loaded.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/isotope.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/scrollup.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/jquery.vticker-min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/jquery.theia.sticky.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/jquery.elevatezoom.js'); ?>"></script>
        <!-- Template  JS -->
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/main.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/shop.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/plugins/slider-range.js'); ?>"></script>
    </body>
</html>

<style>
    .link_width {
        max-width: 324px;
    }
</style>

<script>
    $(document).on('click','#forgotPassword',function(){

       $('#forgotPasswordModal').modal('show');

    });
</script>
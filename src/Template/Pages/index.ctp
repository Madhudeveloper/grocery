<main class="main">
    <section class="home-slider position-relative mb-30">
        <div class="container">
            <div class="home-slide-cover mt-30">
                <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                   <?php foreach ($homebanners as $key => $homebanner) { ?>
                    <div class="single-hero-slider single-animation-wrap" style="background-image: url(<?php echo $this->Url->build('/webroot/uploads/slider/'.$homebanner['image']); ?>">
                        <div class="slider-content">
                            <div class="width-heading">
                            <h1 class="display-2 mb-40">
                                <?php echo $homebanner['title']; ?>
                            </h1> 
                            </div>
                            <p class="mb-65"><?php echo $homebanner['sub_title']; ?></p>
                            <form class="form-subcriber d-flex">
                                <input type="email" placeholder="Your emaill address" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="slider-arrow hero-slider-1-arrow"></div>
            </div>
        </div>
    </section>
    <!--End hero slider-->
    <!--End category slider-->
    <section class="banners mb-25">
        <div class="container">
            <div class="row">
                <?php foreach ($subbanners as $key => $subbanner) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <img src="<?php echo $this->Url->build('/webroot/uploads/subbanner/'.$subbanner['image']); ?>" alt="" />
                        <div class="banner-text">
                            <div class="width-subheading">
                                <h4><?php echo $subbanner['sub_title']; ?></h4>
                            </div>
                            <a href="shop-grid-right.html" class="btn btn-xs"><?php echo $subbanner['button_name']; ?> <i class="fi-rs-arrow-small-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--End banners-->
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Popular Products</h3>
                <!-- <ul class="nav nav-tabs links" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                    </li>
                </ul> -->
            </div>
            <!--End nav-tabs-->

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        <?php foreach ($popular_products as $key => $popular_product) {  ?>
                            <?php $getreview = 0; $total = 0; foreach($popular_product['reviews'] as $key => $review) { 
                                $total += $review['rating'];
                                $totalreview = count($popular_product['reviews']);
                                $getreview = ($total/$totalreview)*20;
                            }?> 
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="<?php echo $this->Url->build('/products/view/'.$popular_product['slug']); ?>">
                                            <img class="default-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$popular_product['image_1']); ?>" alt="" />
                                            <img class="hover-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$popular_product['image_2']); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="View" class="action-btn" href="<?php echo $this->Url->build('/products/view/'.$popular_product['slug']); ?>"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Sale</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <!-- <div class="product-category">
                                        <a href="<?php echo $this->Url->build('/products/view'); ?>"><?php echo $popular_product['product_name']; ?></a>
                                    </div> -->
                                    <h2><a href="s<?php echo $this->Url->build('/products/view/'.$popular_product['slug']); ?>"><?php echo $popular_product['product_name']; ?></a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                        </div>
                                        <!-- <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                    </div>
                                    <div class="product-card-bottom">
                                        <?php 
                                           $discount = $popular_product['product_variants']['0']['price'] * ($popular_product['product_variants']['0']['offer_percentage'] / 100);

                                           $final_amount = ($popular_product['product_variants']['0']['price'] - $discount);

                                        ?>
                                        <div class="product-price">
                                            <span>₹ <?php echo ($final_amount); ?></span>
                                            <span class="old-price">₹ <?php echo $popular_product['product_variants']['0']['price'] ?></span>
                                            &nbsp
                                            <span style="font-size: 12px;"><?php echo $popular_product['product_variants']['0']['offer_percentage'] ?>% Off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--end product card-->
                    </div>
                    <!--End product-grid-4-->
                </div>
            </div>
            <!--End tab-content-->
        </div>
    </section>
    <!--Products Tabs-->
    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Featured Products</h3>
                <!-- <ul class="nav nav-tabs links" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                    </li>
                </ul> -->
            </div>
            <!--End nav-tabs-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        <?php foreach ($featured_products as $key => $featured_product) {  ?>
                            <?php $getreview = 0; $total = 0; foreach($featured_product['reviews'] as $key => $review) { 
                                $total += $review['rating'];
                                $totalreview = count($featured_product['reviews']);
                                $getreview = ($total/$totalreview)*20;
                            }?>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="<?php echo $this->Url->build('/products/view/'.$featured_product['slug']); ?>">
                                            <img class="default-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$featured_product['image_1']); ?>" alt="" />
                                            <img class="hover-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$featured_product['image_2']); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <!-- <a aria-label="Add To Cart" class="action-btn" href="<?php echo $this->Url->build('/products/directAddCart/'.$featured_product['id']); ?>"><i class="fi-rs-shopping-cart"></i></a> -->
                                        <a aria-label="View" class="action-btn" href="<?php echo $this->Url->build('/products/view/'.$featured_product['slug']); ?>"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                    </div> -->
                                </div>
                                <div class="product-content-wrap">
                                    <!-- <div class="product-category">
                                        <a href="<?php echo $this->Url->build('/uploads/products/view'); ?>"><?php ?></a>
                                    </div> -->
                                    <h2><a href="<?php echo $this->Url->build('/products/view/'.$featured_product['slug']); ?>"><?php echo $featured_product['product_name'] ?></a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">

                                            <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                        </div>
                                        <!-- <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                    </div>
                                    <div class="product-card-bottom">
                                        <?php 
                                    
                                          $discount = $featured_product['product_variants']['0']['price'] * ($featured_product['product_variants']['0']['offer_percentage'] / 100);

                                           $final_amount = ($featured_product['product_variants']['0']['price'] - $discount);
                                        ?>
                                        
                                        <div class="product-price">
                                            <span>₹ <?php echo round($final_amount); ?></span>
                                            <span class="old-price">₹<?php echo $featured_product['product_variants']['0']['price'] ?></span>
                                            &nbsp
                                            <span style="font-size: 12px;"><?php echo $featured_product['product_variants']['0']['offer_percentage'] ?>% Off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product card-->
                        <?php } ?>
                    </div>
                    <!--End product-grid-4-->
                </div>
            </div>
            <!--End tab-content-->
        </div>
    </section>
    <!--End Best Sales-->
    <section class="section-padding pb-5">
        <div class="container">
            <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                <h3 class="">Deals Of The Day</h3>
                <!-- <a class="show-all" href="shop-grid-right.html">All Deals
                    <i class="fi-rs-angle-right"></i>
                </a> -->
            </div>
            <div class="row">
                <?php foreach ($deal_products as $key => $deal_product) { ?>
                    <?php $getreview = 0; $total = 0; foreach($deal_product['reviews'] as $key => $review) { 
                        $total += $review['rating'];
                        $totalreview = count($deal_product['reviews']);
                        $getreview = ($total/$totalreview)*20;
                    }?>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <div class="product-img-action-wrap">
                            <div class="product-img">
                                <a href="<?php echo $this->Url->build('/products/view/'.$deal_product['slug']); ?>">
                                    <img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$deal_product['image_1']); ?>" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="deals-countdown-wrap">
                                <div class="deals-countdown" data-countdown="<?php echo date("Y-m-d H:i:s",strtotime($deal_product->deals_end_day)); ?>"></div>
                            </div>
                            <div class="deals-content">
                                <h2><a href="<?php echo $this->Url->build('/products/view/'.$deal_product['slug']); ?>"><?php echo $deal_product['product_name']; ?></a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div class="product-card-bottom">
                                    <?php 
                                        $discount = $deal_product['product_variants']['0']['price'] * ($deal_product['product_variants']['0']['offer_percentage'] / 100);

                                        $final_amount = ($deal_product['product_variants']['0']['price'] - $discount);
                                    ?>
                                    <div class="product-price">
                                        <span>₹ <?php echo ($final_amount); ?> </span>
                                        <span class="old-price">₹ <?php echo $deal_product['product_variants']['0']['price'] ?></span>
                                        &nbsp
                                        <span style="font-size: 12px;"><?php echo $deal_product['product_variants']['0']['offer_percentage']; ?>%Off</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--End Deals-->
    <section class="section-padding mb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                    <h4 class="section-title style-1 mb-30 animated animated">Top Selling</h4>
                    <div class="product-list-small animated animated">
                        <?php foreach ($topselling_products as $key => $topselling_product) { ?>
                            <?php $getreview = 0; $total = 0; foreach($topselling_product['reviews'] as $key => $review) { 
                                $total += $review['rating'];
                                $totalreview = count($topselling_product['reviews']);
                                $getreview = ($total/$totalreview)*20;
                            }?>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="<?php echo $this->Url->build('/products/view/'.$topselling_product['slug']); ?>"><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$topselling_product['image_1']); ?>" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="<?php echo $this->Url->build('/products/view/'.$topselling_product['slug']); ?>"><?php echo $topselling_product['product_name']; ?></a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                    </div>
                                    <!-- <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                </div>
                                <div class="product-price">
                                    <?php 
                                        $discount = $topselling_product['product_variants']['0']['price'] * ($topselling_product['product_variants']['0']['offer_percentage'] / 100);

                                        $final_amount = ($topselling_product['product_variants']['0']['price'] - $discount);

                                    ?>
                                    <span>₹ <?php echo round($final_amount); ?></span>
                                    <span class="old-price">₹ <?php echo $topselling_product['product_variants']['0']['price']; ?></span>
                                    &nbsp
                                    <span style="font-size: 12px;"><?php echo $topselling_product['product_variants']['0']['offer_percentage']; ?>%Off</span>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <h4 class="section-title style-1 mb-30 animated animated">Trending Products</h4>
                    <div class="product-list-small animated animated">
                        <?php foreach ($trending_products as $key => $trending_product){ ?>
                            <?php $getreview = 0; $total = 0; foreach($trending_product['reviews'] as $key => $review) { 
                                $total += $review['rating'];
                                $totalreview = count($trending_product['reviews']);
                                $getreview = ($total/$totalreview)*20;
                            }?>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="<?php echo $this->Url->build('/products/view/'.$trending_product['slug']); ?>"><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$trending_product['image_1']); ?>" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="<?php echo $this->Url->build('/products/view/'.$trending_product['slug']); ?>"><?php echo $trending_product['product_name']; ?></a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                    </div>
                                    <!-- <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                </div>
                                <div class="product-price">
                                    <?php 
                                        $discount = $trending_product['product_variants']['0']['price'] * ($trending_product['product_variants']['0']['offer_percentage'] / 100);

                                        $final_amount = ($trending_product['product_variants']['0']['price'] - $discount);

                                    ?>
                                    <span>₹ <?php echo round($final_amount); ?></span>
                                    <span class="old-price">₹ <?php echo $trending_product['product_variants']['0']['price'];?></span>
                                    &nbsp
                                    <span style="font-size: 12px;"><?php echo $trending_product['product_variants']['0']['offer_percentage'];?>%Off</span>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                    <div class="product-list-small animated animated">
                        <?php foreach ($recently_products as $key => $recently_product){ ?>
                            <?php $getreview = 0; $total = 0; foreach($recently_product['reviews'] as $key => $review) { 
                                $total += $review['rating'];
                                $totalreview = count($recently_product['reviews']);
                                $getreview = ($total/$totalreview)*20;
                            }?>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="<?php echo $this->Url->build('/products/view/'.$recently_product['slug']); ?>"><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$recently_product['image_2']); ?>" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="<?php echo $this->Url->build('/products/view/'.$recently_product['slug']); ?>"><?php echo $recently_product['product_name']; ?></a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                    </div>
                                    <!-- <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                </div>
                                <div class="product-price">
                                    <?php 
                                        $discount = $recently_product['product_variants']['0']['price'] * ($recently_product['product_variants']['0']['offer_percentage'] / 100);

                                        $final_amount = ($recently_product['product_variants']['0']['price'] - $discount);

                                    ?>
                                    <span>₹ <?php echo round($final_amount); ?></span>
                                    <span class="old-price">₹ <?php echo $recently_product['product_variants']['0']['price']; ?></span>
                                    &nbsp
                                    <span style="font-size: 12px;"><?php echo $recently_product['product_variants']['0']['offer_percentage']; ?>%Off</span>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <h4 class="section-title style-1 mb-30 animated animated">Top Rated</h4>
                    <div class="product-list-small animated animated">
                        <?php foreach ($toprated_products as $key => $toprated_product){ ?>
                            <?php $getreview = 0; $total = 0; foreach($toprated_product['reviews'] as $key => $review) { 
                                $total += $review['rating'];
                                $totalreview = count($toprated_product['reviews']);
                                $getreview = ($total/$totalreview)*20;
                            }?>
                        <article class="row align-items-center hover-up">
                            <figure class="col-md-4 mb-0">
                                <a href="<?php echo $this->Url->build('/products/view/'.$toprated_product['slug']); ?>"><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$toprated_product['image_2']); ?>" alt="" /></a>
                            </figure>
                            <div class="col-md-8 mb-0">
                                <h6>
                                    <a href="<?php echo $this->Url->build('/products/view/'.$toprated_product['slug']); ?>"><?php echo $toprated_product['product_name']; ?></a>
                                </h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                    </div>
                                    <!-- <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                </div>
                                <div class="product-price">
                                    <?php 
                                        $discount = $toprated_product['product_variants']['0']['price'] * ($toprated_product['product_variants']['0']['offer_percentage'] / 100);

                                        $final_amount = ($toprated_product['product_variants']['0']['price'] - $discount);

                                    ?>
                                    <span>₹ <?php echo round($final_amount); ?></span>
                                    <span class="old-price">₹ <?php echo $toprated_product['product_variants']['0']['price']; ?></span>
                                    <span style="font-size: 12px;"><?php echo $toprated_product['product_variants']['0']['offer_percentage']; ?>%Off</span>
                                </div>
                            </div>
                        </article>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End 4 columns-->
</main>

<style>
    .width-heading {
        max-width: 60%;
    }

    .width-subheading {
        max-width: 274px;
    }
</style>        

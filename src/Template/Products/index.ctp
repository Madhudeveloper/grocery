 <main class="main">
            <div class="page-header mt-30 mb-50">
                <div class="container">
                    <div class="archive-header">
                        <div class="row align-items-center">
                            <div class="col-xl-3">
                                <h1 class="mb-15">All Products</h1>
                                <div class="breadcrumb">
                                    <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a> <span></span>Products
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-30">
                <div class="row flex-row-reverse">
                    <div class="col-lg-4-5">
                        <div class="row product-grid">
                            <?php  foreach ($new_products as $key => $new_product){?>
                                <?php $getreview = 0; $total = 0; foreach($new_product['reviews'] as $key => $review) { 
                                    $total += $review['rating'];
                                    $totalreview = count($new_product['reviews']);
                                    $getreview = ($total/$totalreview)*20;
                                }?> 
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="<?php echo $this->Url->build('/products/view/'.$new_product['slug']); ?>">
                                                <img class="default-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$new_product['image_1']); ?>" alt="" />
                                                <img class="hover-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$new_product['image_2']); ?>" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="View" class="action-btn" href="<?php echo $this->Url->build('/products/view/'.$new_product['slug']); ?>"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">New Sale</span>
                                        </div> -->
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2><a href="<?php echo $this->Url->build('/products/view/'.$new_product['slug']); ?>"><?php echo $new_product['product_name']; ?></a></h2>
                                        <div class="product-rate-cover">  
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                            </div>
                                            <!-- <span class="font-small ml-5 text-muted"> (4.0)</span> -->
                                        </div>
                                        <div class="product-card-bottom">
                                            <?php 
                                                $discount = $new_product['product_variants']['0']['price'] * ($new_product['product_variants']['0']['offer_percentage'] / 100);

                                                $final_amount = ($new_product['product_variants']['0']['price'] - $discount);

                                            ?>
                                            <div class="product-price">
                                                <span>₹ <?php echo round($final_amount); ?></span>
                                                <span class="old-price">₹ <?php echo $new_product['product_variants']['0']['price']; ?></span>
                                                &nbsp
                                                <span style="font-size: 12px;"><?php echo $new_product['product_variants']['0']['offer_percentage']; ?>%Off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                            <!--end product card-->
                        </div>
                        <!--product grid-->
                        <div class="pagination-area mt-20 mb-20">
                            <nav aria-label="Page navigation example">
                              <center> 
                                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                                
                                <?php if(!empty($this->Paginator->numbers())){ ?>
                                 <div class="paginator">
                                    <ul class="pagination">
                                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                        <?= $this->Paginator->numbers() ?>
                                        <?= $this->Paginator->next(__('next') . ' >') ?>
                                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                                    </ul>
                                </div>
                                 <br><br>
                                <?php } ?>
                              <br><br>
                              </center> 
                                <!-- <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                    </li>
                                </ul> -->
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
                        <div class="sidebar-widget widget-category-2 mb-30">
                            <h5 class="section-title style-1 mb-30">Category</h5>
                            <ul>
                                <?php $i = 1; foreach ($product_categories as $key => $product_category) { ?>
                                <?php foreach ($product_category['product_sub_categories'] as $key => $ProductCategory) { if($i > 7){ break; } ?>
                                <li>
                                    <a href="<?php echo $this->Url->build('/products/category/'.$ProductCategory['slug']); ?>"><?php echo $ProductCategory['name']; ?></a>
                                </li>
                                <?php $i++; } ?>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- Fillter By Price -->
                        <!-- <div class="sidebar-widget price_range range mb-30">
                            <h5 class="section-title style-1 mb-30">Fill by price</h5>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range" class="mb-20"></div>
                                    <div class="d-flex justify-content-between">
                                        <div class="caption">From: <strong id="slider-range-value1" class="text-brand"></strong></div>
                                        <div class="caption">To: <strong id="slider-range-value2" class="text-brand"></strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="" />
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="" />
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="" />
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21" value="" />
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished (27)</span></label>
                                        <br />
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31" value="" />
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div> -->
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                            <h5 class="section-title style-1 mb-30">New products</h5>
                            <?php foreach ($popular_products as $key => $popular_product) { ?>
                            <div class="single-post clearfix">
                                <div class="image">
                                    <img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$popular_product['image_1']); ?>" alt="#" />
                                </div>
                                <div class="content pt-10">
                                    <h5><a href="<?php echo $this->Url->build('/products/view/'.$popular_product['slug']); ?>"><?php echo $popular_product['product_name']; ?></a></h5>
                                    <p class="price mb-0 mt-5">₹ <?php echo $popular_product['product_variants']['0']['price']; ?></p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span><?php echo $product['product_sub_category']['name']; ?>
                        <span></span> <a href="#"><?php echo $product['product_name']; ?></a> 
                    </div>
                </div>
            </div>
            <div class="container mb-30">
                <div class="row">
                    <div class="col-xl-11 col-lg-12 m-auto">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="product-detail accordion-detail">
                                    <div class="row mb-50 mt-30">
                                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                            <div class="detail-gallery">
                                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                                <!-- MAIN SLIDES -->
                                                <div class="product-image-slider">
                                                    <?php if(!empty($product['image_1'])){ ?>
                                                    <figure class="border-radius-10">
                                                        <img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$product['image_1']); ?>" alt="product image" height="497px" width ="497px" />
                                                    </figure>
                                                    <?php } ?>
                                                    <?php if(!empty($product['image_2'])){ ?>
                                                    <figure class="border-radius-10">
                                                        <img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$product['image_2']); ?>" alt="product image" height="497px" width ="497px" />
                                                    </figure>
                                                    <?php } ?>
                                                </div>
                                                <!-- THUMBNAILS -->
                                                <div class="slider-nav-thumbnails">
                                                    <div><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$product['image_1']); ?>" alt="product image" /></div>
                                                    <div><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$product['image_2']); ?>" alt="product image" /></div>
                                                </div>
                                            </div>
                                            <!-- End Gallery -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="detail-info pr-30 pl-30">
                                                <!-- <span class="stock-status out-stock"> Sale Off </span> -->
                                                <h2 class="title-detail variant-name"><?php echo $product['product_name']; ?></h2>
                                                <div class="product-detail-rating">
                                                    <?php $getreview = 0; $total = 0; foreach($product['reviews'] as $key => $review) { 
                                                        $total += $review['rating'];
                                                        $totalreview = count($product['reviews']);
                                                        $getreview = ($total/$totalreview)*20;
                                                    }?>
                                                    <div class="product-rate-cover text-end">
                                                        <div class="product-rate d-inline-block">
                                                            <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                                        </div>
                                                        <!-- <span class="font-small ml-5 text-muted"> (32 reviews)</span> -->
                                                    </div>
                                                </div>
                                                <div class="clearfix product-price-cover">
                                                    <?php 
                                                       $discount = $product['product_variants']['0']['price'] * ($product['product_variants']['0']['offer_percentage'] / 100);

                                                       $final_amount = ($product['product_variants']['0']['price'] - $discount);

                                                    ?>
                                                    <div class="product-price primary-color float-left">
                                                        <span class="current-price text-brand final-price">₹ <?php echo round($final_amount); ?></span>
                                                        <span>
                                                            <span class="save-price font-md color3 ml-15"></span>
                                                            <span class="old-price font-md ml-15">₹ <?php echo $product['product_variants']['0']['price']; ?></span>
                                                        </span>
                                                    </div>
                                                </div>
                                               <!--  <div class="short-desc mb-30">
                                                    <p class="font-lg"><?php echo $product['product_description']; ?></p>
                                                </div> -->
                                                <div class="attr-detail attr-size mb-30">
                                                    <strong class="mr-10">Size / Weight: </strong>
                                                    <?php $i =0; foreach ($product['product_variants'] as $key => $product_variant) { ?>

                                                        <ul class="list-filter size-filter font-small product-varient" data-variantname-id="<?php echo $product_variant['variant']; ?>" data-offer-id="<?php echo $product_variant['offer_percentage']; ?> %" data-price-id="₹ <?php echo $product_variant['price']; ?>" data-variant-id = "<?php echo $product_variant['id']; ?>">
                                                            <li class="<?php if($i == 0){echo "active";} ?>"><a href="#"><?php echo $product_variant['uom']['uomname'] ?></a></li>&nbsp &nbsp
                                                            <input type="hidden" class="total_amount" value="<?php echo $product_variant['price']; ?>">
                                                            <input type="hidden" class="discount_amount" value="<?php echo $product_variant['offer_percentage']; ?>">
                                                        </ul>
                                                        <?php $i++; } ?>   
                                                </div>
                                                <div class="quantity-container info-container">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <input class="quantity_input form-control" type="number" min="1" id="quantity" value="1"   >
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <button class="btn btn-success" id="addtoCart"  data-id="<?php echo $product['id']; ?>"><i class="fi-rs-shopping-cart"></i> ADD TO CART</button>
                                                            <input type="hidden" class="variant_id" value="<?php echo $product_variant['id']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Detail Info -->
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="tab-style3">
                                            <ul class="nav nav-tabs text-uppercase">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content shop_info_tab entry-main-content">
                                                <div class="tab-pane fade show active" id="Description">
                                                    <div class="">
                                                        <p><?php echo $product['product_description']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-60">
                                        <div class="col-12">
                                            <h2 class="section-title style-1 mb-30">Related products</h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row related-products">
                                                <?php foreach ($related_products as $key => $related_product) { ?>
                                                    <?php $getreview = 0; $total = 0; foreach($related_product['reviews'] as $key => $review) { 
                                                        $total += $review['rating'];
                                                        $totalreview = count($related_product['reviews']);
                                                        $getreview = ($total/$totalreview)*20;
                                                    }?>
                                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                    <div class="product-cart-wrap hover-up">
                                                        <div class="product-img-action-wrap">
                                                            <div class="product-img product-img-zoom">
                                                                <a href="<?php echo $this->Url->build('/products/view/'.$related_product['slug']); ?>" tabindex="0">
                                                                    <img class="default-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$related_product['image_1']); ?>" alt="" />
                                                                    <img class="hover-img" src="<?php echo $this->Url->build('/webroot/uploads/products/'.$related_product['image_2']); ?>" alt="" />
                                                                </a>
                                                            </div>
                                                            <div class="product-action-1">
                                                                <a aria-label="View" class="action-btn" href="<?php echo $this->Url->build('/products/view/'.$related_product['slug']); ?>"><i class="fi-rs-eye"></i></a>
                                                            </div>
                                                            <!-- <div class="product-badges product-badges-position product-badges-mrg">
                                                                <span class="hot"></span>
                                                            </div> -->
                                                        </div>
                                                        <div class="product-content-wrap">
                                                            <h2><a href="<?php echo $this->Url->build('/products/view/'.$related_product['slug']); ?>" tabindex="0"><?php echo $related_product['product_name']; ?></a></h2>
                                                             <div class="product-rate">
                                                             <div class="product-rating" style="width: <?php echo $getreview ?>%"></div>
                                                            </div>
                                                            <div class="product-price">
                                                                <?php 
                                                                   $discount = $related_product['product_variants']['0']['price'] * ($related_product['product_variants']['0']['offer_percentage'] / 100);

                                                                   $final_amount = ($related_product['product_variants']['0']['price'] - $discount);

                                                                ?>
                                                                <span>₹ <?php echo ($final_amount); ?></span>
                                                                <span class="old-price">₹ <?php echo $related_product['product_variants']['0']['price']; ?></span>
                                                                <span style="font-size: 12px;"><?php echo $related_product['product_variants']['0']['offer_percentage']; ?>%Off</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
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
                                <!-- Product sidebar Widget -->
                                <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                                    <h5 class="section-title style-1 mb-30">New products</h5>
                                    <?php foreach ($popular_products as $key => $popular_product) ?>
                                    <?php $getreview = 0; $total = 0; foreach($popular_product['reviews'] as $key => $review){ 
                                        $total += $review['rating'];
                                        $totalreview = count($popular_product['reviews']);
                                        $getreview = ($total/$totalreview)*20;
                                    }?>
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$popular_product['image_1']); ?>" alt="#" />
                                        </div>
                                        <div class="content pt-10">
                                            <h5><a href="<?php echo $this->Url->build('/products/view/'.$popular_product['slug']); ?>"><?php echo$popular_product['product_name']; ?></a></h5>
                                            <p class="price mb-0 mt-5">₹ <?php echo$popular_product['product_variants']['0']['price']; ?></p>
                                            <div class="product-rate">
                                                <div class="product-rating" style="width: <?php echo $getreview; ?>%"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<style>
    .quantity_input {
        color: green;
    }
</style>

<script>
    $(document).ready(function(){
     $(".product-varient").click(function(){    
        var datavariantnameId = $(this).attr("data-variantname-id");
        var datapriceId = $(this).attr("data-price-id");
        var dataofferId = $(this).attr("data-offer-id");
        
        // Discount Formula
        var offer_percentage = $('.discount_amount').val();
        var total = $('.total_amount').val();
        var discount = total * (offer_percentage / 100);
        var final_discount = total - discount;
        
        
        $('.variant-name').html(datavariantnameId);
        $('.save-price').html(dataofferId);
        $('.current-price').html('₹'+final_discount);
        $('.variant_id').val($(this).attr('data-variant-id'));
        // alert(datavariantnameId);
    }); 
});    


// Addto cart //
$(document).on('click','#addtoCart',function(){

    var product_id = $(this).attr('data-id');

    // alert(product_id); return false;

    var quantity = $('#quantity').val();

    var variant_name = $('.variant_id').val();

    $.ajax({
        type: "POST",
        url: '<?php echo $this->Url->build('/products/add-to-cart'); ?>',
        dataType: "json",
        data: {product_id:product_id,quantity:quantity,variant_name:variant_name},

        success:function(data)
        {     
           // location: reload();
        },
        error: function (){ }
        });
    });
</script>
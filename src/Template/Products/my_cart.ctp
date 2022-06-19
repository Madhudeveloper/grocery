<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/') ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span>Shopping Cart
            </div>
        </div>
    </div>
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10">Your Cart</h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body">There are <span class="text-brand"><?php echo $get_count_cart; ?></span> products in your cart</h6>
                    <!-- <h6 class="text-body"><a href="#" class="text-muted"><i class="fi-rs-trash mr-5"></i>Clear Cart</a></h6> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <?php echo $this->Flash->render(); ?>
                <div class="table-responsive shopping-summery" style="border-radius: 20px;">
                    <table class="table table-wishlist">
                        <thead>
                            <tr class="main-heading">
                                <th scope="col" colspan="2" style="padding-left: 40px;">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Grandtotal</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($products)){ $total = 0; foreach ($products as $key => $product) { ?>
                            <tr class="pt-30">
                                <td class="image product-thumbnail pt-40" style="padding-left: 40px;"><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$product['product_image']); ?>" alt="#"></td>
                                <td class="product-des product-name">
                                    <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="<?php echo $this->Url->build('/products/view/'.$product['slug']); ?>"><?php echo $product['product_name']; ?></a></h6>
                                    <!-- <div class="sku-code">
                                        <span>SkuCode:<span>&nbsp <?php echo $product['skucode']; ?></span></span>
                                    </div> -->
                                    </div>
                                </td>
                                <td>
                                    <input class="quantity_input form-control width-size" type="number" value="<?php echo $product['quantity']; ?>"  min="1" data-product-id="<?php echo $key; ?>" >
                                </td>
                                <td class="price" data-title="Price">
                                    <?php 
                                        $discount = $product['price'] * ($product['offer_percentage'] / 100);

                                        $final_amount = round($product['price'] - $discount);

                                    ?>
                                    <h4 class="text-brand">₹ <?php echo ($final_amount); ?> </h4>
                                </td>

                                <td class="price" data-title="Price">
                                    <h4 class="text-brand">₹ <?php  $total += $final_amount*$product['quantity'];  echo $final_amount*$product['quantity']; ?></h4>
                                </td>
                                <td class="action text-center">
                                    <a href="<?php echo $this->Url->build('/products/removeCart/'.$key); ?>" onclick = "return confirm ('Are you sure, want to remove this product from our cart ?')" class="text-body"><i class="fi-rs-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } } else { ?>
                                <tr>
                                <td colspan="7"><center>No Products on your Cart</center></td>
                                </tr> 
                            <?php } ?>  
                        </tbody>
                    </table>
                </div>
                <div class="divider-2 mb-30"></div>
                <div class="cart-action d-flex justify-content-between">
                    <!-- <a  class="btn "><i class="fi-rs-refresh mr-10"></i>Update Cart</a> -->
                    <a href="<?php echo $this->Url->build('/products'); ?>" class="btn  mr-10 mb-sm-15"><i class="fi-rs-arrow-left mr-10"></i>Continue Shopping</a>
                 </div>
                <!-- <div class="col-lg-5">
                    <div class="p-40">
                    <h4 class="mb-10">Apply Coupon</h4>
                    <p class="mb-30"><span class="font-lg text-muted">Using A Promo Code?</p>
                        <div class="d-flex justify-content-between">
                            <input class="form-control mr-15 coupon_code" placeholder="Enter Your Coupon">
                            <button type="button" class="btn btn-success apply_coupon"><i class="fi-rs-label mr-10"></i>Apply</button>
                        </div>
                        
                    </div>
                </div>  -->
            </div>
            <?php if(!empty($products)){ ?>
            <div class="col-lg-4">
                <div class="border p-md-4 cart-totals ml-30">
                    <div class="table-responsive">
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-default">Subtotal</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-brand text-end">₹ <?php echo $total; ?></h4>
                                    </td>
                                    <input type="hidden" class="total_cost" value="<?php echo $total; ?>">
                                </tr>
                               <!--  <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-default">Discount%</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-brand text-end discount_value">₹ 0.00</h4>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td class="cart_total_label">
                                        <h6 class="text-default">Total</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-brand text-end grand_total">₹ <?php echo $total; ?></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="<?php echo $this->Url->build('/products/checkout'); ?>" class="btn mb-20 w-100">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>

<style>
    .width-size {
        max-width: 75px;
    }
</style>  

<script>
    $(document).on('blur', '.quantity_input', function(){
        var product_id = $(this).attr('data-product-id'); 
        // alert(product_id); return false;  
        var quantity = $(this).val();   

            $.ajax({
                type: "POST",
                url: '<?php echo $this->Url->build('/products/update-cart'); ?>',
                dataType: "json",
                data: {product_id:product_id,quantity:quantity},

                success:function(data)
                {     
                    location.reload();          
                },
                error: function (){ }
            });
        });

</script>  
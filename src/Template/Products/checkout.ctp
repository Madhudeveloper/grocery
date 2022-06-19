 <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10">Checkout</h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are <span class="text-brand"><?php echo $get_count_cart; ?></span> products in your cart</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <?php echo $this->Flash->render(); ?>
                    <div class="row mb-50">
                        <div class="col-md-6">
                            <?php if(empty($authcheck)){ ?>
                            <div class="row mb-20">
                                <div class="toggle_info">
                                    <div class="panel-body">
                                        <p class="mb-30 font-sm">Register and save time <br>Register with us for future convenience:<br>- Fast and easy check out<br>- Easy access to your order history and status</p>
                                        <a href="<?php echo $this->Url->build('/users/login'); ?>" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Create Account</a>
                                    </div>
                                </div>  
                            </div>
                            <?php } else {   ?>   
                             <div class="row mb-20">
                                <div class="toggle_info">
                                    <div class="panel-body">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="guest" value="guest" checked>
                                            <label class="form-check-label label_info" data-bs-toggle="collapse" href="#collapsePassword" data-target="#collapsePassword" aria-controls="collapsePassword" for="createaccount"><span>You have logged In</span></label>
                                        </div>
                                         <!-- <div class="custome-radio">
                                            <input class="form-check-input" required="" type="radio" name="text" id="guest" value="guest" checked>
                                            <label class="form-check-label" for="exampleRadios3">You have logged In</label>
                                        </div> --> 
                                    </div>
                                </div>  
                            </div>      
                            <?php } ?>  
                        </div>
                        <?php if(empty($authcheck)){ ?>
                        <div class="col-lg-6 mb-sm-15 mb-lg-0 mb-md-3">
                            <div class="toggle_info">
                                <span><i class="fi-rs-user mr-10"></i><span class="text-muted font-lg">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed font-lg" aria-expanded="false">Click here to login</a></span>
                            </div>
                            <div class="panel-collapse collapse login_form" id="loginform">
                                <div class="panel-body">
                                    <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                    <?= $this->Form->create('login',['class' => 'register-form outer-top-xs' , 'url' => '/users/login?redirect=/products/checkout' ]) ?>
                                        <div class="form-group">
                                            <label>Email Address<span style="color: red;">*</span></label>
                                            <input type="text" name="email" placeholder="Username Or Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password<span style="color: red;">*</span></label>
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md">Log in</button>
                                        </div>
                                    <?= $this->Form->end() ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <h4 class="mb-30">Billing Details</h4>
                        <?= $this->Form->create('login',['class' => 'register-form outer-top-xs' ]) ?>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="billing_name" placeholder="Delivery Name *" value="<?php echo $authcheck['name']; ?>">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="billing_contact_1" placeholder="Delivery Contact *" value="<?php echo $authcheck['mobile']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="billing_contact_2" placeholder="Delivery Contact 2 (Optional)">
                                </div>

                                <div class="form-group col-lg-6">
                                    <input type="text" name="billing_street" required="" placeholder="Delivery Street *">
                                </div>
                            </div>
                            <div class="row shipping_calculator">
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="billing_location" placeholder="Delivery Location *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="billing_city" placeholder="Delivery City *">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control state" name="state" required="">
                                            <option value="">Select an option...</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Ladakh">Ladakh</option>
                                            <option value="Lakshadweep"> Lakshadweep</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Pondicherry">Pondicherry</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input required="" type="number" name="billing_pincode" placeholder="Delivery Pincode *">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="billing_notes" placeholder="Delivery Notes">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="billing_email" placeholder="Customer Email *" value="<?php echo $authcheck['email']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="p-40">
                                <h4 class="mb-10">Apply Coupon</h4>
                                <p class="mb-30"><span class="font-lg text-muted">Using A Promo Code?</p>
                                    <div class="d-flex justify-content-between">
                                        <input class="form-control mr-15 coupon_code" placeholder="Enter Your Coupon">
                                        <button type="button" class="btn btn-success apply_coupon"><i class="fi-rs-label mr-10"></i>Apply</button>
                                    </div>
                                    
                                </div>
                            </div>  
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="border p-40 cart-totals ml-30 mb-50">
                        <div class="d-flex align-items-end justify-content-between mb-30">
                            <h6 class="text-default">Product Name</h6>
                            <h6 class="text-default">Quantity</h6>
                            <h6 class="text-default">Subtotal</h6>
                            <h6 class="text-default">Grandtotal</h6>
                        </div>
                        <div class="divider-2 mb-30"></div>
                        <div class="table-responsive order_table checkout">
                            <table class="table no-border">
                                <tbody>
                                    <?php if(!empty($products)) { $total = 0; foreach ($products as $key => $product) { ?>
                                    <tr>
                                        <td class="image product-thumbnail"><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$product['product_image']); ?>" width="70px" alt="#"></td>
                                        <td>
                                            <h6 class="w-160 mb-5"><a href="<?php echo $this->Url->build('/products/view/'.$product['slug']); ?>" class="text-heading"><?php echo $product['product_name']; ?></a></h6></span>
                                        </td>
                                        <td>
                                            <input class="quantity_input form-control width-size" type="number" value="<?php echo $product['quantity']; ?>"  min="1" data-product-id="<?php echo $key; ?>" readonly>
                                        </td>
                                        <td>
                                            <?php 
                                                $discount = $product['price'] * ($product['offer_percentage'] / 100);

                                                $final_amount = round($product['price'] - $discount);

                                            ?>
                                            <h4 class="text-brand size">₹ <?php echo ($final_amount); ?> </h4>
                                        </td>
                                        <td>
                                            <h4 class="text-brand size">₹ <?php  $total += $final_amount*$product['quantity'];  echo $final_amount*$product['quantity']; ?></h4>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Subtotal</td>
                                        <td style="font-weight: bold; font-size: 18px;">₹ <?php echo $total; ?></td>
                                        <input type="hidden" class="total_cost" value="<?php echo $total; ?>">
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Discount%</td>
                                        <td class="discount_value" style="font-weight: bold; font-size: 16px">₹ 0.00</td>
                                        <!-- <input type="hidden" id="final_discount" value="<?php echo $total; ?>"> -->

                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Grandtotal</td>
                                        <td class="grand_total" style="font-weight: bold; font-size: 18px;">₹ <?php echo $total ;?></td>
                                    </tr>
                                    <?php } else { ?>
                                    <tr>
                                        <td colspan="6"><center>No Products on your cart</center></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="payment ml-30">
                        <h4 class="mb-30">Payment</h4>
                        <div class="payment_option">
                            <!-- <div class="custome-radio">
                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                                <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                            </div> -->
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="cash_on_delivery" id="exampleRadios4" value="0">
                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="cash_on_delivery" id="exampleRadios5" value="1">
                                <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Online Payment</label>
                            </div>
                        </div>
                        <div class="payment-logo d-flex">
                            <img class="mr-15" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/payment-paypal.svg'); ?>" alt="">
                            <img class="mr-15" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/payment-visa.svg'); ?>" alt="">
                            <img class="mr-15" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/payment-master.svg'); ?>" alt="">
                            <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/icons/payment-zapper.svg'); ?>" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-fill-out btn-block mt-30">Place on Order<i class="fi-rs-sign-out ml-15"></i></button>
                            </div>
                            <!-- <div class="col-md-6">
                                <a href="<?php echo $this->Url->build('/pages/invoice'); ?>" target="_blank" class="btn btn-fill-out btn-block mt-30">View Invoice<i class="fi-rs-eye ml-15"></i></a>
                            </div> -->
                    </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </main>

<style>
    .width-size {
        max-width: 66px;    
    }
    .size {
        font-size: 20px;
    }
</style>   

<script>

    // $discount = $sub_total * ($view_coupon['coupon_percentage'] /100);

    // $final_discount = $sub_total - $discount;

    // document.getelementById("final_discount").inner.html=$final_discount;



    /** Get coupon Method **/
    $(document).on('click','.apply_coupon',function(){
        var coupon_code = $('.coupon_code').val();

        if(coupon_code == '' || coupon_code == null)
        {
           swal("Please enter your coupon", {
            icon : "error",
            buttons: {                  
                confirm: {
                    className : 'btn btn-danger'
                }
            }
        });

           return false;
        }

        $.ajax({
            type: "POST",
            url: '<?php echo $this->Url->build('/products/check-coupons'); ?>',
            dataType: "json",
            data: {coupon_code:coupon_code},  
            success:function(data)
            {   
                if(data.status == 0)
                {  
                   swal("Invalid Coupon, please enter a valid coupon", {
                        icon : "error",
                        buttons: {                  
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        }
                    });

                }
                else if(data.status == 1) {
                    var percentage = data.percentage;
                    var total = $('.total_cost').val();
                    var discount_value = total * (percentage / 100);
                    var grand_amount = Math.round(total - discount_value);

                    // if(data.active == 1){
                    //     var discount_value = total * (percentage / 100); 
                    //     var grand_amount = total - discount_value;
                    // }else{  
                    //     var percentage = 0;  
                    //     var discount_value = total * (percentage / 100);  
                    //     var grand_amount = total - discount_value;
                    // }

                    $('.grand_total').html('₹'+grand_amount);
                    $('.discount_value').html(percentage+'%');

                        swal("Coupon has been applied", {
                        icon : "success",
                        buttons: {                  
                            confirm: {
                                className : 'btn btn-success'
                            }
                        }
                    });
                    
                }
                else if(data.status == 2){

                  swal("Your purchased amount not valid for this coupon", {
                        icon : "error",
                        buttons: {                  
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        }
                    });

                }

            }

        });

    });
</script>

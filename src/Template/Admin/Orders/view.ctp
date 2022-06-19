<div class="pcoded-content">
    <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page body start -->
            <div class="page-body">
                <!-- Container-fluid starts -->
                <div class="container">
                    <!-- Main content starts -->
                    <div>
                        <!-- Invoice card start -->
                        <div class="card">
                            <div class="row invoice-contact">
                                <div class="col-md-8">
                                    <div class="invoice-box row">
                                        <div class="col-sm-12">
                                            <table class="table table-responsive invoice-table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td><img src="<?php echo $this->Url->build('/webroot/uploads/logo/'.$get_settings['image']); ?>" class="m-b-10" alt=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $get_social_links['company_name']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $get_social_links['address']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="mailto: <?php echo $get_social_links['email_address']  ?>" target="_top"><?php echo $get_social_links['email_address']  ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="tel: <?php echo $get_settings['phonenumber']; ?>">+91 <?php echo $get_settings['phonenumber'] ; ?></a></td>
                                                    </tr>
                                                    <!-- <tr>
                                                            <td><a href="#" target="_blank">www.demo.com</a>
                                                            </td>
                                                        </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row text-center">
                                        <div class="col-sm-12 invoice-btn-group">
                                            <button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20" onclick="myfunction()">Print Invoice
                                            </button>
                                            <button type="button" class="btn btn-info waves-effect waves-light">Download Invoice
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row invoive-info">
                                    <div class="col-md-4 col-xs-12 invoice-client-info">
                                        <address class="font-13">
                                            <strong class="font-14">Billed To:</strong>
                                            <br>
                                            <?php echo $order['order_invoices'][0]['billing_name']; ?>,<br>
                                            <?php 
                                                echo $order['order_invoices'][0]['billing_street']." , "; 
                                                if(!empty($order['order_invoices'][0]['billing_location'])){
                                                    echo $order['order_invoices'][0]['billing_location']." , ";
                                                } 
                                                echo $order['order_invoices'][0]['billing_city'];
                                            ?>
                                            <br>
                                            <?php echo $order['order_invoices'][0]['state']."  , ".$order['order_invoices'][0]['billing_pincode']; ?><br>
                                                <abbr title="Phone">Contact 1:</abbr> <?php echo $order['order_invoices'][0]['billing_contact_1']; ?><br>
                                                <?php if(!empty($order['order_invoices'][0]['billing_contact_2'])){ ?>
                                                <abbr title="Phone">Contact 2:</abbr> <?php echo $order['order_invoices'][0]['billing_contact_2']; ?>
                                                <?php } ?>

                                                <?php if($order['order_invoices'][0]['dispatch_address'] != ''){
                                                echo "<br><b>Dispatch To </b>: ".$order['order_invoices'][0]['dispatch_address'];
                                            } ?>
                                        </address>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <h6>Order Information :</h6>
                                        <table class="table table-responsive invoice-table invoice-order table-borderless">
                                            <?php $order_type = [1 =>'Ordered', 2 => 'Delivered', 3 => 'In Transit']; ?>
                                            <tbody>
                                                <tr>
                                                    <th>Date :</th>
                                                    <td class="text-warning"><?php echo date('d F Y', strtotime($order['created']) ); ?></td>
                                                </tr>
                                                <!-- <tr>
                                                    <th>Status :</th>
                                                    <td>
                                                        <span class="label label-warning"><?php echo $order['order_status']['status']; ?></span>
                                                    </td>
                                                </tr> -->
                                                <tr>
                                                    <th>Order Id :</th>
                                                    <td>
                                                        <?php echo $order['id']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Order Status :</th>
                                                    <td>
                                                        &nbsp
                                                        <span class="label label-success"><?php echo $order_type[$order['status']]; ?></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <h5 class="m-b-20">Payment Method</h5>
                                        <img class="" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/payment-method.png'); ?>" alt="">
                                        <!-- <h5 class="text-primary">CCAvenue & Cards Payments :</h5>
                                        <h5 class="text-primary">Visa, Master Card, Credit Card</h5> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table  invoice-detail-table">
                                                <thead>
                                                    <tr class="thead-default">
                                                        <th>Item</th>
                                                        <th>SKU Code</th>
                                                        <th>Varients</th>  
                                                        <th>Actual Price</th>  
                                                        <th>Offer Percentage</th>     
                                                        <th>Quantity</th>                             
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $total = 0; foreach ($order['order_products'] as $key => $order_product) { ?>
                                                    <tr>
                                                        <td><?php echo $order_product['product']['product_name']; ?></td>
                                                        <td><?php echo $order_product['ProductVariants']['skucode'] ?></td>
                                                        <td><?php echo $order_product['ProductVariants']['variant'] ?></td>
                                                        <!-- <td>₹ <?php $getprice = $order_product['ProductVariants']['price']*5/100; echo $order_product['ProductVariants']['price']-$getprice;  ?></td> -->
                                                        <td>₹<?php echo $order_product['ProductVariants']['price'] ?></td>
                                                        <td><?php echo $order_product['ProductVariants']['offer_percentage'] ?>%</td>
                                                        <td><?php echo $order_product['quantity']; ?></td>
                                                        <td>₹ <?php echo $order_product['ProductVariants']['price']; ?></td>
                                                    </tr>  
                                                    <?php 
                                                    $discount = $order_product['ProductVariants']['price'] * ($order_product['ProductVariants']['offer_percentage']);

                                                    $final_discount = ($order_product['ProductVariants']['price'] - $discount);

                                                    ?> 
                                                    <?php $total = $final_discount * $order_product['quantity']; } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-responsive invoice-table invoice-total">
                                            <tbody>
                                                <tr>
                                                    <th>Sub Total :</th>
                                                    <td>₹ <?php echo $order['sub_total']; ?></td>
                                                </tr>
                                                <!-- <tr>
                                                    <th>Discount (%) :</th>
                                                    <td><?php echo $order['offer_percentage'] ?>%</td>
                                                </tr> -->
                                                <tr class="text-info">
                                                    <td>
                                                        <hr/>
                                                        <h5 class="text-primary">Total  :</h5>
                                                    </td>
                                                    <td>
                                                        <hr/>
                                                        <h5 class="text-primary">₹ <?php echo $order['total']; ?></h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6>Terms And Condition :</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Invoice card end -->
                    </div>
                </div>
                <!-- Container ends -->
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Warning Section Starts -->

        <div id="styleSelector">

        </div>
    </div>
</div>

<script>
    function myfunction()
    {
        window.print();
    }
    
</script>
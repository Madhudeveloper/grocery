<div class="invoice invoice-content invoice-5">
    <div class="back-top-home hover-up mt-30 ml-30">
        <a class="hover-up" href="<?php echo $this->Url->build('/'); ?>"><i class="fi-rs-home mr-5"></i> Homepage</a>
    </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="invoice-inner">
                            <div class="invoice-info" id="invoice_wrapper">
                                <div class="invoice-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="logo d-flex align-items-center">
                                                <a href="<?php echo $this->Url->build('/'); ?>" class="mr-20"><img src="<?php echo $this->Url->build('/webroot/uploads/logo/'.$get_settings['image']); ?>"  alt="logo" /></a>
                                                <div class="text">
                                                    <strong class="text-brand"><?php echo $get_social_links['company_name']; ?></strong> <br />
                                                   <?php echo $get_social_links['address']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <h2>INVOICE</h2>
                                            <h6>ID Number: <span class="text-brand"><?php echo $order_invoices['0']['id']; ?></span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-banner">
                                    <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/invoice/banner.png'); ?>" alt="">
                                </div>

                                <div class="invoice-center">
                                    <div class="table-responsive">
                                        <table class="table table-striped invoice-table">
                                            <thead class="bg-active">
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Sub Total</th>
                                                    <th class="text-right">Grand Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $total = 0; foreach ($products as $key => $product) { ?>
                                                <tr>
                                                    <td>
                                                        <div class="item-desc-1">
                                                            <span><?php echo $product['product_name']; ?></span>
                                                            <small>SKU: <?php echo $product['skucode']; ?></small>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">₹ <?php echo $product['price']; ?></td>
                                                    <td class="text-center"><?php echo $product['quantity']; ?></td>
                                                    <td class="text-right">₹ <?php  $total += $product['price']*$product['quantity'];  echo $product['price']*$product['quantity']; ?></td>
                                                </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td colspan="3" class="text-end f-w-600">SubTotal</td>
                                                    <td class="text-right">₹ <?php echo $total; ?></td>
                                                </tr>
                                                <!-- <tr>
                                                    <td colspan="3" class="text-end f-w-600">Tax</td>
                                                    <td class="text-right">$85.99</td>
                                                </tr> -->
                                                <tr>
                                                    <td colspan="3" class="text-end f-w-600">Grand Total</td>
                                                    <td class="text-right f-w-600">₹ <?php echo $total; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-bottom pb-80">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="mb-15">Invoice Infor</h6>
                                            <p class="font-sm">
                                                <strong>Issue date:</strong><?php echo date('d.m.y'); ?><br />
                                                <strong>Invoice To:</strong> NestMart Inc<br />
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <h6 class="mb-15">Total Amount</h6>
                                            <h3 class="mt-0 mb-0 text-brand">₹ <?php echo $total; ?></h3>
                                            <p class="mb-0 text-muted">Taxes Included</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-btn-section clearfix d-print-none">
                                <a href="javascript:window.print()" class="btn btn-lg btn-custom btn-print hover-up"> <img src="assets/imgs/theme/icons/icon-print.svg" alt="" /> Print </a>
                                <a id="invoice_download_btn" class="btn btn-lg btn-custom btn-download hover-up"> <img src="assets/imgs/theme/icons/icon-download.svg" alt="" /> Download </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
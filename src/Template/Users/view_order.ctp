 <main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> View Orders
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <?php echo $this->element('account_sidebar'); ?>
                        </div>
                        <div class="col-md-9">
                            <?php echo $this->Flash->render(); ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead style="background: #3BB77E; color: #fff;">
                                            <tr>
                                                <th class="text-center">Id</th>
                                                 <th class="text-center">Image</th>
                                                <th class="text-center">Item Name</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-center">Varients</th>
                                                <th class="text-center">Unit Cost</th>
                                                <th class="text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                              foreach ($orders as $key => $value) { ?>
                                            ?>
                                           <tr>
                                               <td class="text-center"><?php echo $value['id']; ?></td>
                                               <td class="text-center"><img src="<?php echo $this->Url->build('/webroot/uploads/products/'.$value['order_products'][0]['product']['image_1']); ?>" width="50" /></td>
                                              <td class="text-center"><?php echo $value['order_products'][0]['product']['product_name']; ?></td>
                                               <td class="text-center"><?php echo $value['order_products'][0]['quantity']; ?></td>
                                               <td class="text-center"><?php echo $value['order_products'][0]['product_variant']['uom']['uomname']; ?></td>
                                               <td class="text-center"><?php echo $value['order_products'][0]['price']; ?></td>
                                               <td class="text-center">₹<?php echo $value['total']; ?></td>
                                           </tr>

                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
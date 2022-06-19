<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                 <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Inventory Details</h4>
                     </div>
                     <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="<?php echo $this->Url->build('/'); ?>">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- DOM/Jquery table start -->
                    <div class="card">
                        <div class="card-header">
                            <span><?php echo $this->Flash->render(); ?></span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Product</th>
                                            <th class="text-center">SkuCode</th>
                                            <th class="text-center">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; 
                                        foreach ($product_inventories as $key => $product_inventory) { ?>
                                        <tr style="background-color: #fff;">
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="text-center"><?php echo $product_inventory['product_name']; ?></td>
                                            </td>
                                            <td class="text-center"><?php echo $product_inventory['product_variants']['0']['skucode']; ?></td>
                                            <td class="text-center"><?php echo $product_inventory['product_variants']['0']['price']; ?></td>
                                           <!--  <td class="text-center"><input type="number" min="1" name="" class="form-control quantity" data-id="<?php echo $product_inventory['product_variants']['0']['id']; ?>" value="<?php echo $product_inventory['product_variants']['0']['price']; ?>"></td> -->
                                        </tr>
                                         <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DOM/Jquery table end -->
                </div>
                 <!-- Page-body start -->
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>
</div>
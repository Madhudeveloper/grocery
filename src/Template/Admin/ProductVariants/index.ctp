<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Product Variant Details</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html">
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
                                                <a href="<?php echo $this->Url->build('/admin/product-variants/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>  Add Product Variant</button></a>
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
                                                                <th>Id</th>
                                                                <th>Variant Name</th>
                                                                <th>Created</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1; foreach ($productVariants as $key => $productVariant) { ?>
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $productVariant['variant']; ?></td>
                                                                <td><?php echo $productVariant['created']; ?></td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="<?php echo $this->Url->build('/admin/product-variants/edit/'.$productVariant->id); ?>" type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                                    </div>
                                                                </td>
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
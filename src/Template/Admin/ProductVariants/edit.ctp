<div class="pcoded-content">
   <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Edit Product Variant</h4>
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
            <label>
                <?php echo $this->Flash->render(); ?>
            </label>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-8">
                        <!-- Basic Inputs Validation start -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <?= $this->Form->create($productVariant,['novalidate' => true ]) ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Variant Name</label>
                                        <div class="col-sm-8">
                                            <?php echo $this->Form->control('variant',[ 'placeholder' => 'Product Varient Name' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Products</label>
                                        <div class="col-sm-8">
                                             <?php echo $this->Form->control('product_id',[ 'class' => 'select2 form-control mb-3 custom-select' , 'label' => false , 'options' => $products ]); ?> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">UOM</label>
                                        <div class="col-sm-8">
                                            <?php echo $this->Form->control('uomname',[ 'class' => 'select2 form-control mb-3 custom-select' , 'label' => false , 'options' => $uoms ]); ?> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-8">
                                            <?php echo $this->Form->control('price',[ 'placeholder' => 'Product price' , 'class' => 'form-control', 'type' => 'number' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Offer Percentage</label>
                                        <div class="col-sm-8">
                                            <?php echo $this->Form->control('offer_percentage',[ 'placeholder' => 'Product price' , 'class' => 'form-control', 'type' => 'number' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gst Percentage</label>
                                        <div class="col-sm-8">
                                            <?php echo $this->Form->control('gst_percentage',[ 'placeholder' => 'Product price' , 'class' => 'form-control', 'type' => 'number' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
                                            <a href="<?php echo $this->Url->build('/admin/product-variant'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                        </div>
                                    </div>
                                 <?= $this->Form->end() ?>
                            </div>
                        </div>
                        <!-- Basic Inputs Validation end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>                    
    </div>
</div>
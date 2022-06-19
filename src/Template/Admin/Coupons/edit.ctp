<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Edit Coupons</h4>
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
                                    <?= $this->Form->create($coupon,['novalidate' => true ]) ?>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Coupon Name</label>
                                            <div class="col-sm-8">
                                                <?php echo $this->Form->control('code',[ 'placeholder' => 'Discout Name' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Is Active</label>
                                            <div class="col-sm-8">
                                                 <?php echo $this->Form->control('is_active',['class' => 'form-control' , 'label' => false , 'min' =>1]); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Expiry Date</label>
                                            <div class="col-sm-8">
                                                <input type="date" name="expiry_date" class="form-control" value="<?php echo date('Y-m-d',strtotime($coupon['expiry_date'])); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Coupon Percentage</label>
                                            <div class="col-sm-8">
                                                 <?php echo $this->Form->control('coupon_percentage',['class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
                                                <a href="<?php echo $this->Url->build('/admin/coupons'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
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
<div class="pcoded-content">
   <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Edit Settings</h4>
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
                                <?= $this->Form->create($setting,['novalidate' => true , 'type' => 'file']) ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-4">
                                            <?php echo $this->Form->control('phonenumber',[ 'placeholder' => 'phonenumber' , 'class' => 'form-control', 'type' => 'number', 'require' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Website Logo</label>
                                        <div class="col-sm-4">
                                           <div class="form-group">
                                            <input type="file" name="image">
                                            <br><br>
                                            <img src="<?php echo $this->Url->build('/uploads/logo/'.$setting['image']); ?>" width="150">
                                            <input type="hidden" name="hid_image" value="<?php echo $setting['image']; ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Loader Image</label>
                                        <div class="col-sm-4">
                                           <div class="form-group">
                                            <input type="file" name="image">
                                            <br><br>
                                            <img src="<?php echo $this->Url->build('/uploads/logo/'.$setting['loader_image']); ?>" width="150">
                                            <input type="hidden" name="hid_loader_image" value="<?php echo $setting['loader_image']; ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Working Hours Start</label>
                                        <div class="col-sm-4">
                                            <input type="time" name="working_hours_start" class="form-control" value="<?php echo date('h:i:s',strtotime($setting['working_hours_start'])); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Working Hours End</label>
                                        <div class="col-sm-4">
                                            <input type="time" name="working_hours_end" class="form-control" value="<?php echo date('h:i:s',strtotime($setting['working_hours_end'])); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
                                            <a href="<?php echo $this->Url->build('/admin/settings'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
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
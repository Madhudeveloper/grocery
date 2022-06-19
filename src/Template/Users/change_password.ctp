<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Change Password
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
                            <div class="tab-content account dashboard-content pl-50">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Edit Your Account</h5>
                                        </div>
                                        <div class="card-body">
                                             <?= $this->Form->create('changePassword',['novalidate' => true , 'class' => 'form-delivery']) ?>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <?php echo $this->Form->control('old_password',[ 'placeholder' => 'Old Password', 'type' => 'password' , 'class' => 'form-control' , 'label' => false]); ?>
                                                </div>
                                                    <div class="form-group col-md-4">
                                                     <?php echo $this->Form->control('password',[ 'placeholder' => 'New Password', 'type' => 'password' , 'class' => 'form-control' , 'label' => false]); ?>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <?php echo $this->Form->control('confirm_password',[ 'placeholder' => 'Confirm Password', 'type' => 'password' , 'class' => 'form-control' , 'label' => false]); ?>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit">Change Password</button>
                                                </div>
                                        </div>
                                        <?= $this->Form->end() ?>
                                        </div>
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
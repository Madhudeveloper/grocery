<div class="pcoded-content">
    <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Add Social Links & Address</h4>
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
                    <div class="col-sm-12">
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
                                

                        <?= $this->Form->create($socialLink,['novalidate' => false]) ?>
                            <div class="card-body">
                                <?= $this->Flash->render() ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Facebook Link</label>
                                            <?php echo $this->Form->control('facebook_link',[ 'placeholder' => 'Facebook Link', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Facebook Link']); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter Link</label>
                                            <?php echo $this->Form->control('twitter_link',[ 'placeholder' => 'Twitter Link', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Twitter Link']); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Instagram Link</label>
                                            <?php echo $this->Form->control('instagram_link',[ 'placeholder' => 'Instagram Link', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Instagram Link']); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Linkedin Link</label>
                                            <?php echo $this->Form->control('linkedin_link',[ 'placeholder' => 'Linkedin Link', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Linkedin Link']); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pintrest Link</label>
                                            <?php echo $this->Form->control('pintrest_link',[ 'placeholder' => 'Pintrest Link', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Pintrest Link']); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Reserved Text</label>
                                            <?php echo $this->Form->control('reserved_text',[ 'placeholder' => 'Reserved Text', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Reserved Text']); ?>
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Youtube Link</label>
                                            <?php echo $this->Form->control('youtube_link',[ 'placeholder' => 'Youtube Link', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Youtube Link']); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <?php echo $this->Form->control('company_name',[ 'placeholder' => 'Companyname', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Companyname']); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <?php echo $this->Form->control('address',[ 'placeholder' => 'Address', 'class' => 'form-control' , 'type' => 'textarea' , 'label' => false , 'empty' => 'Enter Address']); ?>
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GST</label>
                                            <?php echo $this->Form->control('gst',[ 'placeholder' => 'Gst Number', 'class' => 'form-control' , 'type' => 'number' , 'label' => false , 'empty' => 'Enter Gst Number']); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <?php echo $this->Form->control('email_address',[ 'placeholder' => 'Emailaddress', 'class' => 'form-control' , 'type' => 'email' , 'label' => false , 'empty' => 'Enter Email Address']); ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="<?php echo $this->Url->build('/admin/socialLinks'); ?>" class="btn btn-secondary">Cancel</a>
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
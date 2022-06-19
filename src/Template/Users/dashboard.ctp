 <main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Dashboard
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
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <center><h3 class="mb-0">Welcome to our Dashboard !</h3></center>
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
    </div>
</main>
 <main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Orders
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
                                                <th class="text-center">Order</th>
                                                <th class="text-center">Order Total</th>
                                                <th class="text-center">Ordered on</th>
                                                <th class="text-center">Current Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($orders)){ 
                                              $status = [1 => 'Ordered', 2 => 'Delivered', 3 => 'In transit'];
                                              foreach ($orders as $key => $value) { ?>
                                            ?>

                                            <tr>
                                                <td class="text-center"><?php echo $value['id']; ?></td>
                                                <td class="text-center">₹ <?php echo $value['total']; ?></td>
                                                <td class="text-center"><?php echo date( 'd F Y' , strtotime($value['created'])); ?></td>
                                                 <td class="text-center">
                                                    <?php if($value['status'] == 1){ ?>
                                                        <p class="text-success &status=0"><?php echo $status[$value['status']]; ?></p>
                                                    <?php } else { ?>
                                                        <p class="text-warning &status=1"><?php echo $status[$value['status']]; ?></p>
                                                    <?php } ?>
                                                </td> 
                                                <td class="text-center">
                                                <div class="btn-group">
                                                   <a href="<?php echo $this->Url->build('/users/view-order/'.$value['id']); ?>" class="btn btn-theme btn-theme-dark">View</a>
                                                    </a>
                                                </div>
                                                &nbsp;
                                                <div class="btn-group">
                                                    <a href="<?php echo $this->Url->build('/users/track-order/'.$value['id']); ?>" class="btn btn-theme btn-theme-dark">Track</a>
                                                </div>
                                            </td>
                                            </tr>
                                            <?php } } else { ?>
                                                <tr>
                                                    <td colspan="5"><center>No Orders Not Found</center></td>
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
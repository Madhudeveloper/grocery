<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="<?php $this->Url->build('/'); ?>">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Pages</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="alert-size">
                    <?php echo $this->Flash->render(); ?> 
                </div>
                <div class="page-body">
                    <div class="row">
                        <!-- counter-card-1 start-->
                        <div class="col-md-12 col-xl-3">
                            <div class="card counter-card-1">
                                <div class="card-block-big">
                                    <div>
                                        <h3><?php echo count($totalProducts); ?></h3>
                                        <h4>Total Products</h4>
                                        <div class="progress ">
                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-pink" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <i class="ti-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <!-- counter-card-1 end-->
                        <!-- counter-card-2 start-->
                        <div class="col-md-6 col-xl-3">
                            <div class="card counter-card-2">
                                <div class="card-block-big">
                                    <div>
                                        <h3>₹ <?php echo number_format($order_total[0]['total']); ?></h3>
                                        <h4>Total Revenue</h4>
                                        <div class="progress ">
                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <i class="fa fa-google-wallet" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <!-- counter-card-2 end-->
                        <!-- counter-card-3 start-->
                       <div class="col-md-6 col-xl-3">
                            <div class="card counter-card-3">
                                <div class="card-block-big">
                                    <div>
                                        <h3><?php echo count($total_orders); ?></h3>
                                        <h4>Today's Orders</h4>
                                        <div class="progress ">
                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-default" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <i class="ti-truck"></i>
                                </div>
                            </div>
                        </div>
                        <!-- counter-card-3 end-->
                       <!-- counter-card-2 start-->
                        <div class="col-md-6 col-xl-3">
                            <div class="card counter-card-2" style="border-top-color: pink;">
                                <div class="card-block-big">
                                    <div>
                                        <h3>₹ <?php echo number_format($today_orders[0]['total']); ?></h3>
                                        <h4>Today's Revenue</h4>
                                        <div class="progress ">
                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <i class="ti-direction-alt"></i>
                                </div>
                            </div>
                        </div>
                        <!-- counter-card-2 end-->
                       <!--  <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Combination Chart</h5>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-refresh"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div id="chart4"></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Gauge chart</h5>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-refresh"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div id="chart2"></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Recent Order table start -->
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>ORDER LIST</h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <div class="dt-responsive table-responsive">
                                            <table id="res-config" class="table table-bordered w-100">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Order Id</th>
                                                        <th class="text-center">Order Date</th>
                                                        <th class="text-center">Order Total</th>
                                                        <th class="text-center">Order Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $order_type = [1 =>'Ordered', 2 => 'Delivered', 3 => 'In Transit']; ?>
                                                    <?php if(!empty($recently_orders)){foreach($recently_orders as $key => $recently_order) { ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $recently_order['id']; ?></td>
                                                        <td class="text-center"><?php echo $recently_order['created']; ?></td>
                                                        <td class="text-center">₹ <?php echo $recently_order['total']; ?></td>
                                                         <td class="text-center">
                                                            <?php if($recently_order['status'] == 1){ ?>
                                                                <label class="badge badge-success &status=0"><?php echo $order_type[$recently_order['status']]; ?></label>
                                                            <?php } else { ?>
                                                                <label class="badge badge-warning &status=1"><?php echo $order_type[$recently_order['status']]; ?></label>
                                                            <?php } ?>
                                                        </td> 
                                                    </tr>  
                                                    <?php } }else { echo "<tr><td clospan='6'><center>No Records Found</center</td></tr>"; } ?>     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Order table end -->
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector">
        </div>
    </div>
</div>

<style>
    .alert-size{
        max-width: 300px;
    }
</style>


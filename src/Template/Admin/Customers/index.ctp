<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Customer Details</h4>
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
                                                                <th>Customer Name</th>
                                                                <th>Mobile</th>
                                                                <th>Address</th>
                                                                <th>Created</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 1; foreach ($customers as $key => $customer) { ?>
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><?php echo $customer['name']; ?></td>
                                                                <td><?php echo $customer['mobile']; ?></td>
                                                                <td><?php echo $customer['address']; ?></td>
                                                                <td><?php echo $customer['created']; ?></td>
                                                                <td>
                                                                     <div class="btn-group">
                                                                        <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $customer->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Order Details</h4>
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
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Order Id</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Customer Name</th>
                                            <th class="text-center">Customer Mobile</th>
                                            <th class="text-center">Order Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($orders as $key => $order) { ?>  
                                        <tr style="background-color: #fff;">
                                            <td class="text-center"><?php echo $i; ?></td>
                                           <td class="text-center">
                                            <?php echo $order['id']; ?>
                                            </td> 
                                            <td class="text-center">
                                                <?php echo $order['total']; ?>
                                            </td>                                     
                                            <td class="text-center">
                                                <?php echo $order['order_invoice']['billing_name']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $order['order_invoice']['billing_contact_1']; ?>
                                            </td>
                                            <td class="text-center">
                                                Abandoned
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo $this->Url->build('/admin/orders/view/'.$order->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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
<script type="text/javascript">

    /** Order Status **/
    $(document).on('change', 'order_status', function(){

        $.ajax({
            type: "POST";
            Url: '<?php echo $this->Url->build('/admin/orders/changestatus'); ?>',
            dataType: "json",
            data: {status:$(this).val(),order_id:$(this).attr('order-id')},
            success: function(data)
            {

            },
            error:function(){}

        });

    });
</script>
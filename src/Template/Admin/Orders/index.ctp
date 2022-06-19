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
                                            <th class="text-center">Order History</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($orders as $key => $order) { ?>
                                        <tr style="background-color: #fff;">
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="text-center"><?php echo $order['id']; ?></td>
                                            <td class="text-center"><?php echo $order['total']; ?></td>
                                            <td class="text-center"><?php echo $order['order_invoices'][0]['billing_name']; ?></td>
                                            <td class="text-center"><?php echo $order['order_invoices'][0]['billing_contact_1']; ?></td>
                                            <td class="text-center">
                                                <select class="form-control order_status" style="height: 18px; width: 100px; margin-left: 35px;" order-id="<?php echo $order['id']; ?>">
                                                    <option value="1" <?php if($order['status'] == 1){ echo "Selected"; } ?>>Ordered</option>
                                                    <option value="2" <?php if($order['status'] == 2){ echo "Selected"; } ?>>Delivered</option>
                                                    <option value="3" <?php if($order['status'] == 3){ echo "Selected"; } ?>>In Transit</option>
                                                </select>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-primary btn-sm getHistory" data-id="<?php echo $order['id']; ?>">History</button>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo $this->Url->build('/admin/orders/view/'.$order->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
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
    $(document).on('change', '.order_status', function(){

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
    
    /** Get History **/
    $(document).on('click','.getHistory',function(){

        $.ajax({
              type: "POST",
              url: '<?php echo $this->Url->build('/admin/orders/getHistory'); ?>',
              dataType: "json",
              data: {order_id:$(this).attr('data-id')},
              success:function(data)
              {      

                    $('.tbody').html(data.html);

                    $('#myModal').modal('show');
                 
              },
              error: function (){ }
        });
    })

</script>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Order history</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <table class="table table-bordered">
              <thead>
                  <th>History</th>
                  <th>Date</th>
              </thead>
              <tbody class="tbody">
                  
              </tbody>
          </table>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
 </div>
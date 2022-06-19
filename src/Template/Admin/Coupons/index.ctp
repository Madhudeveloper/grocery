<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Coupons Details</h4>
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
                <span><?php echo $this->Flash->render(); ?></span>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- DOM/Jquery table start -->
                    <div class="card">
                        <div class="card-header">
                            <a href="<?php echo $this->Url->build('/admin/coupons/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>  Add Coupons</button></a>
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
                                            <th class="text-center">Coupon Code</th>
                                            <th class="text-center">Is Active</th>
                                            <th class="text-center">Expiry Date</th>
                                            <th class="text-center">Coupon Percentage %</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $status_type = [0 =>'Deactive', 1 => 'Active']; ?>
                                        <?php $i = 1; foreach ($coupons as $key => $coupon) { ?>
                                        <tr style="background-color: #fff;">
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="text-center"><?php echo $coupon['code']; ?></td> 
                                            <!-- <td>
                                                <center><input type="checkbox" class="changeStatus" data-id="<?php echo $coupon['id']; ?>" <?php if($coupon['is_active'] == 1){ echo "Checked"; } ?>></center>
                                            </td>  --> 
                                             <td class="text-center">
                                                <?php if($coupon['is_active'] == 1){ ?>
                                                    <label class="badge badge-success &is_active=0"><?php echo $status_type[$coupon['is_active']]; ?></label>
                                                <?php } else { ?>
                                                    <label class="badge badge-danger &is_active=1"><?php echo $status_type[$coupon['is_active']]; ?></label>
                                                <?php } ?>
                                            </td> 
                                            <td class="text-center"> <?php echo date('d F Y',strtotime($coupon['expiry_date'])); ?></td>
                                            <td class="text-center"><?php echo $coupon['coupon_percentage']; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo $this->Url->build('/admin/coupons/edit/'.$coupon->id); ?>" type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                </div>
                                                &nbsp
                                                <div class="btn-group">
                                                <?= $this->Form->postLink(__('<i class="ti-trash"></i>'),['action' => 'delete', $coupon->id],[ 'class' => 'btn btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')])
                                                ?>
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
<script>
    $(document).on('click','.changeStatus',function(){

        if ($(this).is(':checked')) {

          var is_active = 1;

        }else{

          var is_active = 0;

        }

        $.ajax({
              type: "POST",
              url: '<?php echo $this->Url->build('/admin/coupons/changeStatus'); ?>',
              dataType: "json",
              data: {id:$(this).attr('data-id'),is_active:is_active},
              success:function(data)
              {      

              },
              error: function (){ }
        });


    });

</script>
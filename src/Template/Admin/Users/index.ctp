<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>User Details</h4>
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
                <div class="alert-size">
                    <?php echo $this->Flash->render(); ?> 
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- DOM/Jquery table start -->
                    <div class="card">
                        <div class="card-header">
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $status_type = [0 =>'Not Activated', 1 => 'Activated']; ?>
                                        <?php $i = 1; foreach ($users as $key => $user) { ?>
                                        <tr style="background-color: #fff;">
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $user['name']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['mobile'] ?></td>
                                            <td>
                                                <?php if($user['status'] == 1){ ?>
                                                    <label class="badge badge-success &status=0"><?php echo $status_type[$user['status']]; ?></label>
                                                <?php } else { ?>
                                                    <label class="badge badge-danger &status=1"><?php echo $status_type[$user['status']]; ?></label>
                                                <?php } ?>
                                            </td> 
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <?= $this->Form->postLink(__('<i class="ti-trash"></i>'),['action' => 'delete', $user->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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

<style>
    .alert-size{
        max-width: 300px;
    }
</style>

<!-- <script>
    $(document).on('click', '.changeStatus', function(){

        if($(this).is(':checked')){
            var status = 1;
        }else{
            var status = 0;
        }

        $.ajax({
            type: "POST",
            Url: '<?php $this->Url->build('/admin/users/changeStatus'); ?>',
            dataType: "json",
            data: {id:$(this).attr('data-id'), status:status},
            success function(data)
            {
               
            }
            error function()
            {

            }
        });
    });
</script> -->
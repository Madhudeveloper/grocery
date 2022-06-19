<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>ContactUs Details</h4>
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
                            <a href="<?php echo $this->Url->build('/admin/contact-pages/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add Contact Us </button></a>
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
                                            <th class="text-center">MapLink</th>
                                            <th class="text-center">Created</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($contactPages as $key => $contactPage) { ?>
                                        <tr style="background-color: #fff;">
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="text-center"><?php echo $contactPage['map_link']; ?></td>
                                            <td class="text-center"><?php echo $contactPage['created']; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo $this->Url->build('/admin/contactPages/edit/'.$contactPage->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                </div>
                                                &nbsp
                                                    <div class="btn-group">
                                                    <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $contactPage->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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
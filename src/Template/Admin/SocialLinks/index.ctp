<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Social Link & Address Details</h4>
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
                            <a href="<?php echo $this->Url->build('/admin/social-links/add'); ?>"><button class="btn btn-primary"><i class="fa fa-plus"></i>Add Social Link & Address</button></a>
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
                                            <!-- <th class="text-center">Facebook Link</th>
                                            <th class="text-center">Twitter Link</th>
                                            <th class="text-center">Instagram Link</th>
                                            <th class="text-center">Linkedin Link</th>
                                            <th class="text-center">Pintrest Link</th>
                                            <th class="text-center">Youtube Link</th> -->
                                            <th class="text-center">Reserved Text</th>
                                            <th class="text-center">Company Name</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Gst</th>
                                            <th class="text-center">Email Address</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($socialLinks as $key => $socialLink) { ?>
                                        <tr style="background-color: #fff;">
                                            <td class="text-center"><?php echo $i; ?></td>
                                            <!-- <td class="text-center"><?php echo $socialLink['facebook_link']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['twitter_link']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['instagram_link']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['linkedin_link']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['pintrest_link']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['youtube_link']; ?></td> -->
                                            <td class="text-center"><?php echo $socialLink['reserved_text']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['company_name']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['address']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['gst']; ?></td>
                                            <td class="text-center"><?php echo $socialLink['email_address']; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="<?php echo $this->Url->build('/admin/socialLinks/edit/'.$socialLink->id); ?>" type="button" class="btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                </div>
                                                &nbsp
                                                <div class="btn-group">
                                                    <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'),['action' => 'delete', $socialLink->id],[ 'class' => 'btn-danger btn-sm' , 'escape' => false,  'confirm' => __('Are you sure you want to delete ?')]) ?>
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
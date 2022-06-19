<!DOCTYPE html>
<html lang="en">

<head>
    <title>Grocery Adminpanel</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta name="description" content="Phoenixcoded">
      <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="Phoenixcoded">
      <!-- Favicon icon -->
      <link rel="icon" href="<?php echo $this->Url->build('/backend/flatable/default/assets/images/favicon.ico'); ?>" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/icon/themify-icons/themify-icons.css'); ?>">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/icon/icofont/css/icofont.css'); ?>">
      <!-- flag icon framework css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/flag-icon/flag-icon.min.css'); ?>">
      <!-- Menu-Search css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/menu-search/css/component.css'); ?>">
      <!-- Horizontal-Timeline css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/horizontal-timeline/css/style.css'); ?>">
      <!-- amchart css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/amchart/css/amchart.css'); ?>">
      <!-- flag icon framework css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/flag-icon/flag-icon.min.css'); ?>">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/css/style.css'); ?>">
      <!--color css-->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/css/color/color-1.css'); ?>" id="color" />

      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/css/linearicons.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/css/simple-line-icons.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/css/ionicons.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/css/jquery.mCustomScrollbar.css'); ?>">
      <!-- Data Table Css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/data-table/css/buttons.dataTables.min.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css'); ?>">
      <!-- FontAwesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- jquery file upload Frame work -->
      <link href="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery.filer/css/jquery.filer.css'); ?>" type="text/css" rel="stylesheet" />
      <link href="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css'); ?>" type="text/css" rel="stylesheet" />
      <!-- Editor -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
      <!-- C3 chart -->
      <link rel="stylesheet" href="<?php echo $this->Url->build('/backend/flatable/bower_components/c3/c3.css'); ?>" type="text/css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php echo $this->element('back_end/nav'); ?> 

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/task/task-u1.jpg'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-2.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/task/task-u2.jpg'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/task/task-u3.jpg'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-3.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Michael Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-4.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Irina Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-5.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara Tancredi</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Samon</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/task/task-u3.jpg'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Daizy Mendize</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-3.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Loren Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-4.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/task/task-u3.jpg'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/task/task-u1.jpg'); ?>" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-circle m-t-5" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-circle m-t-5" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-2.png'); ?>" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" pcoded-header-position="relative">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <?php echo $this->element('back_end/sidebar'); ?>  
                    </nav>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Required Jqurey -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/tether/dist/js/tether.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery-slimscroll/jquery.slimscroll.js'); ?>"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/modernizr/modernizr.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/modernizr/feature-detects/css-scrollbars.js'); ?>"></script>
<!-- classie js -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/classie/classie.js'); ?>"></script>
<!-- Rickshow Chart js -->
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/d3/d3.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/rickshaw/rickshaw.js'); ?>"></script>
<!-- Morris Chart js -->
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/morris.js/morris.js'); ?>"></script>
<!-- Horizontal-Timeline js -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/horizontal-timeline/js/main.js'); ?>"></script>
<!-- amchart js -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/amchart/js/amcharts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/amchart/js/serial.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/amchart/js/light.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/amchart/js/custom-amchart.js'); ?>"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/i18next/i18next.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery-i18next/jquery-i18next.min.js'); ?>"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/dashboard/custom-dashboard.js'); ?>"></script>
<script type="text/javascript" src="<?php echo $this->Url->build('/backend/flatable/default/assets/js/script.js'); ?>"></script>

<!-- pcmenu js -->
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/js/pcoded.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/js/demo-12.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/js/jquery.mousewheel.min.js'); ?>"></script>

<!-- data-table js -->
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/data-table/js/jszip.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/data-table/js/pdfmake.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/data-table/js/vfs_fonts.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js'); ?>"></script>
<!-- Custom js -->
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/data-table/js/data-table-custom.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery.filer/js/jquery.filer.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/filer/custom-filer.js'); ?>" type="text/javascript"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/filer/jquery.fileuploads.init.js'); ?>" type="text/javascript"></script>
<!-- jquery file upload js -->
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/jquery.filer/js/jquery.filer.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/filer/custom-filer.js'); ?>" type="text/javascript"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/filer/jquery.fileuploads.init.js'); ?>" type="text/javascript"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/pages/chart/c3/c3-custom-chart.js'); ?>"></script>
<!-- c3 chart js -->
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/d3/d3.min.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/bower_components/c3/c3.js'); ?>"></script>
<script src="<?php echo $this->Url->build('/backend/flatable/default/assets/js/scripts.js'); ?>"></script>
</body>

</html>

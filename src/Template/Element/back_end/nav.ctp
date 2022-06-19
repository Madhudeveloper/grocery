<nav class="navbar header-navbar pcoded-header" header-theme="theme4">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="<?php echo $this->Url->build('/admin/users/dashboard'); ?>">
                <img class="img-fluid" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/logo.png'); ?>" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <div>
                <ul class="nav-left">
                 <li>
                        <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                    </li>
                    <li>
                        <a class="main-search morphsearch-search" href="#">
                            <!-- themify icon -->
                            <i class="ti-search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                         <i class="ti-fullscreen"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="user-profile header-notification">
                        <a href="#!">
                            <img src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/user.png'); ?>" alt="User-Profile-Image">
                            <span>John Doe</span>
                            <i class="ti-angle-down"></i>
                        </a>
                        <ul class="show-notification profile-notification">
                            <li>
                                <a href="<?php echo $this->Url->build('/admin/users/change_password'); ?>">
                                    <i class="ti-settings"></i> Settings
                                </a>
                            </li>
                                <!-- <li>
                                    <a href="user-profile.html">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li> -->
                            <li>
                                <a href="<?php echo $this->Url->build('/admin/users/logout'); ?>">
                                    <i class="ti-layout-sidebar-left"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- search -->
                <div id="morphsearch" class="morphsearch">
                 <form class="morphsearch-form">
                        <input class="morphsearch-input" type="search" placeholder="Search..." />
                        <button class="morphsearch-submit" type="submit">Search</button>
                    </form>
                    <div class="morphsearch-content">
                        <div class="dummy-column">
                            <h2>People</h2>
                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                <h3>Sara Soueidan</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                <h3>Shaun Dona</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Popular</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="PagePreloadingEffect" />
                                <h3>Page Preloading Effect</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="DraggableDualViewSlideshow" />
                                <h3>Draggable Dual-View Slideshow</h3>
                            </a>
                        </div>
                        <div class="dummy-column">
                            <h2>Recent</h2>
                            <a class="dummy-media-object" href="#!">
                                <img src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="TooltipStylesInspiration" />
                                <h3>Tooltip Styles Inspiration</h3>
                            </a>
                            <a class="dummy-media-object" href="#!">
                                <img src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/avatar-1.png'); ?>" alt="NotificationStyles" />
                                <h3>Notification Styles Inspiration</h3>
                            </a>
                        </div>
                    </div>
                    <!-- /morphsearch-content -->
                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                </div>
                <!-- search end -->
            </div>
        </div>
    </div>
</nav>

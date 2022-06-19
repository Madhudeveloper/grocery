<div class="pcoded-inner-navbar main-menu">
    <div class="">
        <div class="main-menu-header">
            <img class="img-40" src="<?php echo $this->Url->build('/backend/flatable/default/assets/images/user.png'); ?>" alt="User-Profile-Image">
            <div class="user-details">
                <span>SuperMarket<i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                <span id="more-details">Admin</span>
            </div>
        </div>

    </div>
    <ul class="pcoded-item pcoded-left-item">
        <li class="">
            <a href="<?php echo $this->Url->build('/admin/users/dashboard'); ?>" data-i18n="nav.file-upload.main">
                <span class="pcoded-micon"><i class="ti-home"></i></span>
                <span class="pcoded-mtext">Dashboard</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" data-i18n="nav.form-components.main">
                <span class="pcoded-micon"><i class="ti-menu"></i></span>
                <span class="pcoded-mtext">Category</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="<?php echo $this->Url->build('/admin/product-categories/'); ?>"data-i18n="nav.form-components.form-elements-advance">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Category List</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="<?php echo $this->Url->build('/admin/product-categories/add'); ?>" data-i18n="nav.form-components.form-components">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Add Category</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" data-i18n="nav.data-table.main">
                <span class="pcoded-micon"><i class="ti-shopping-cart-full"></i></span>
                <span class="pcoded-mtext">SubCategory</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class=" ">
                    <a href="<?php echo $this->Url->build('/admin/product-sub-categories/'); ?>"data-i18n="nav.data-table.advance-initialization">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Subcategory List</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class=" ">
                    <a href="<?php echo $this->Url->build('/admin/product-sub-categories/add'); ?>" data-i18n="nav.bootstrap-table.basic-table">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Add Subcategory</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)" data-i18n="nav.charts.main"> <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span> <span class="pcoded-mtext">Products</span> <span class="pcoded-mcaret"></span> </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/products/'); ?>" data-i18n="nav.charts.echarts"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Product List</span> <span class="pcoded-mcaret"></span> </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/products/add'); ?>" data-i18n="nav.charts.google-chart"> <span class="pcoded-micon"><i class="ti-angle-right"></i></span> <span class="pcoded-mtext">Add Product</span> <span class="pcoded-mcaret"></span> </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)" data-i18n="nav.authentication.main">
                <span class="pcoded-micon"><i class="ti-truck"></i></span>
                <span class="pcoded-mtext">Orders</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/orders'); ?>" data-i18n="nav.authentication.login-bg-image">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Orders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/orders/confirmed-orders'); ?>" data-i18n="nav.authentication.login-bg-image">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Confirmed Orders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/orders/shipped-orders'); ?>" data-i18n="nav.authentication.registration-bg-image">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Shipping Orders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/orders/delivered-orders'); ?>" data-i18n="nav.authentication.forgot-password">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Delivered Orders</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)" data-i18n="nav.user-profile.main">
                <span class="pcoded-micon"><i class="ti-archive"></i></span>
                <span class="pcoded-mtext">Brands</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/brands/'); ?>" data-i18n="nav.user-profile.user-profile">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Brand List</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/brands/add'); ?>" data-i18n="nav.user-profile.timeline">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Add Brand</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)" data-i18n="nav.user-profile.main">
                <span class="pcoded-micon"><i class="ti-gift"></i></span>
                <span class="pcoded-mtext">Coupons</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/coupons/'); ?>" data-i18n="nav.user-profile.user-profile">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Coupons List</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/coupons/add'); ?>" data-i18n="nav.user-profile.timeline">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Add Coupons</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)" data-i18n="nav.user-profile.main">
                <span class="pcoded-micon"><i class="ti-settings"></i></span>
                <span class="pcoded-mtext">Settings</span>
                <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/homebanners/'); ?>" data-i18n="nav.user-profile.user-profile">
                        <span class="pcoded-micon"></span>
                        <span class="pcoded-mtext">Manage Home Banner</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/subbanners/'); ?>" data-i18n="nav.user-profile.timeline">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Manage Sub Banner</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/social-links/'); ?>" data-i18n="nav.user-profile.timeline">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Manage Social Links</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/about-pages/'); ?>" data-i18n="nav.user-profile.timeline">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Manage Aboutus Pages</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo $this->Url->build('/admin/contact-pages/'); ?>" data-i18n="nav.user-profile.timeline">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext">Manage Contactus Pages</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
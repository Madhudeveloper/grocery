<div class="dashboard-menu">
    <ul class="nav flex-column" role="tablist">
        <li class="nav-item"><a class="nav-link active" href="<?php echo $this->Url->build('/users/dashboard'); ?>"><i class="fi-rs-settings-sliders mr-10"></i> Dashboard</a></li>
        <li class="nav-link"><a class="nav-link" href="<?php echo $this->Url->build('/users/edit-account'); ?>"><i class="fi-rs-user mr-10"></i> Account Information</a></li>
        <li class="nav-link"><a class="nav-link" href="<?php echo $this->Url->build('/users/change-password'); ?>"><i class="fi-rs-key mr-10"></i> Change Password</a></li>
        <li class="nav-link"><a class="nav-link" href="<?php echo $this->Url->build('/users/my-orders'); ?>"><i class="fi-rs-shopping-bag mr-10"></i> Order History</a></li>    
        <li class="nav-link"><a class="nav-link" href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="fi-rs-sign-out mr-10"></i> Logout</a></l>
    </ul>
</div>

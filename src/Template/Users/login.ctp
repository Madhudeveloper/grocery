<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span><a href="">Login</a>
            </div>
        </div>
    </div>
    <div class="page-content pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-12 m-auto">
                    <div class="row">
                        <div class="col-lg-6 pr-30 d-none d-lg-block">
                            <div class="card-login mt-115">
                            <?php echo $this->Flash->render(); ?>
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-5">Sign in</h3>
                                            <p class="">Hello, Welcome to your account.</p>
                                        </div>
                                        <br>
                                        <?= $this->form->create('login', ['class' => 'register-form outer-top-xs']) ?>
                                            <div class="form-group">
                                                <label class="info-title">Email Address <span style="color: red;">*</span></label>
                                                <input type="text" required="" name="email" placeholder="Username or Email *" />
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1">Password <span style="color: red;">*</span></label>
                                                <input required="" type="password" name="password" placeholder="Your password *" />
                                                </div>
                                                <div class="login_footer form-group mb-50">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                                            <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                                                        </div>
                                                    </div>
                                                    <a class="text-muted" id="forgotPassword">Forgot password?</a>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-heading btn-block hover-up">LOGIN</button>
                                                </div>
                                            <?= $this->form->end() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8">
                            <div class="card-login mt-115">
                                <?php echo $this->Flash->render(); ?>
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-5">Create an Account</h3>
                                            <p class="">Create Your New Account</p>
                                        </div>
                                        <br>
                                        <?= $this->Form->create('register',['class' => 'register-form outer-top-xs' , 'url' => '/users/register' ]) ?>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Email Address <span style="color: red;">*</span></label>
                                                <input type="text" required="" name="email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Name <span style="color: red;">*</span></label>
                                                <input type="text" required="" name="name" />
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Mobile Number <span style="color: red;">*</span></label>
                                                <input required="" type="number" name="mobile" />
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1">Password <span style="color: red;">*</span></label>
                                                <input required="" type="password" name="password" />
                                            </div>
                                                        
                                            <div class="form-group mb-30">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold">Register</button>
                                            </div>
                                        <?= $this->form->end() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  

<!-- Forget Password Modal -->

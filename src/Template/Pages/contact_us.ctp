<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
             <div class="breadcrumb">
                 <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                 <span></span> Pages <a href=""><span></span> Contact</a>
            </div>
        </div>
    </div>
    <div class="page-content pt-50">
        <section class="container mb-50 d-none d-md-block">
            <div>
                <iframe class="map-width" src="<?php echo $get_contact_pages['map_link']; ?>" width="1500" height="450"></iframe>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <section class="mb-50">
                        <div class="row mb-60">
                            <div class="col-md-10 mb-10 mb-md-0">
                                <h4 class="mb-15 text-brand"><?php echo $get_social_links['company_name']; ?></h4>
                                <?php echo $get_social_links['address']; ?><br />
                                <abbr title="Phone">Phone:</abbr><a href="tel: <?php echo $get_social_links['phonenumber']; ?>" > (+91) <?php echo $get_settings['phonenumber']; ?><br />
                                <abbr title="Email">Email: </abbr><a href="mailto: <?php echo $get_social_links['email_address']; ?>" ><?php echo $get_social_links['email_address']; ?></a><br />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="contact-from-area padding-20-row-col">
                                    <h5 class="text-brand mb-10">Contact form</h5>
                                    <h2 class="mb-10">Drop Us a Line</h2><span><?php echo $this->Flash->render(); ?></span>
                                    <?= $this->Form->create($contactEnquiries,['novalidate' => true ]) ?>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <?php echo $this->Form->control('name',[ 'placeholder' => 'Enter Your Name' , 'class' => 'form-control' ,'label' => false]); ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <?php echo $this->Form->control('last_name',[ 'placeholder' => 'Enter Your LastName' , 'class' => 'form-control' , 'label' => false]); ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <?php echo $this->Form->control('email',[ 'placeholder' => 'Enter Your Emailaddress' , 'type' => 'email' ,'class' => 'form-control' , 'label' => false]); ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="input-style mb-20">
                                                    <?php echo $this->Form->control('mobile',[ 'placeholder' => 'Enter Your phonenumber' , 'type' => 'tel' ,'class' => 'form-control' , 'label' => false]); ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="textarea-style mb-30">
                                                    <?php echo $this->Form->control('message',[ 'placeholder' => 'Enter Message' , 'type' => 'textarea' ,'class' => 'form-control' , 'label' => false]); ?>
                                                </div>
                                                <button class="submit submit-auto-width" type="submit">Send message</button>
                                            </div>
                                        </div>
                                    <?= $this->Form->end() ?>   
                                </div>
                            </div>
                            <div class="col-lg-4 pl-50 d-lg-block d-none">
                                <img class="border-radius-15 mt-50" src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/page/contact-2.png'); ?>" alt="" />
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>    
</main>  

<style type="text/css">
    .error-message{
        color: red;
    }
</style>             
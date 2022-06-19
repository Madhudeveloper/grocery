<main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/') ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Pages <a href=""><span></span> About us</a>
            </div>
        </div>
    </div>
    <div class="page-content pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <section class="row align-items-center mb-50">
                        <div class="col-lg-6">
                            <img src="<?php echo $this->Url->build('/webroot/uploads/aboutus/'.$get_about_pages['image']); ?>" alt="" class="border-radius-15 mb-md-3 mb-lg-0 mb-sm-4" style="width: 500px;" />
                        </div>
                        <div class="col-lg-6">
                            <div class="pl-25">
                                <h2 class="mb-30"><?php echo $get_about_pages['title']; ?></h2>
                                <p class="mb-25"><?php echo $get_about_pages['sub_title']; ?></p>
                                <!-- <div class="carausel-3-columns-cover position-relative">
                                    <div id="carausel-3-columns-arrows"></div>
                                    <div class="carausel-3-columns" id="carausel-3-columns">
                                        <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/page/about-2.png'); ?>" alt="" />
                                        <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/page/about-3.png'); ?>" alt="" />
                                        <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/page/about-4.png'); ?>" alt="" />
                                        <img src="<?php echo $this->Url->build('/frontend/demo/assets/imgs/page/about-2.png'); ?>" alt="" />
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--  <section class="container mb-50 d-none d-md-block">
            <div class="row about-count">
                <div class="col-lg-1-5 col-md-6 text-center mb-lg-0 mb-md-5">
                    <h1 class="heading-1"><span class="count">12</span>+<h4>Glorious years</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">36</span>+</h1>
                    <h4>Happy clients</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">58</span>+</h1>
                    <h4>Projects complete</h4>
                </div>
                <div class="col-lg-1-5 col-md-6 text-center">
                    <h1 class="heading-1"><span class="count">24</span>+</h1>
                    <h4>Team advisor</h4>
                </div>
                <div class="col-lg-1-5 text-center d-none d-lg-block">
                     <h1 class="heading-1"><span class="count">26</span>+</h1>
                     <h4>Products Sale</h4>
                </div>
            </div>
        </section> -->
    </div>
</main>
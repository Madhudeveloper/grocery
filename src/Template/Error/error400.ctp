<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'design';
?>  

<main class="main page-404">
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                    <p class="mb-20"><img src="assets/imgs/page/page-404.png" alt="" class="hover-up" /></p>
                    <p>We are sorry, please contact administrator. </p>
                     <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="<?php echo $this->Url->build('/'); ?>"><i class="fi-rs-home mr-5"></i> Back To Home Page</a>
                </div>
            </div>
        </div>
    </div>
</main>

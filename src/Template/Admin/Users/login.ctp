<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?php echo $this->Url->build('/backend/login/images/bg_1.jpg'); ?>');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Supermarket</strong></h3>
            <br>
            <?php echo $this->Flash->render(); ?>
            <?= $this->Form->create('login',['novalidate' => true , 'class' => 'form-horizontal my-4']) ?>
              <div class="form-group first">
                <label for="email">Email</label>
                <?php echo $this->Form->control('email',['type' => 'text' , 'placeholder' => 'Enter username' , 'class' => 'form-control' , 'label' => false]); ?>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
               <?php echo $this->Form->control('password',[ 'placeholder' => 'Enter password' , 'class' => 'form-control form-control-lg' , 'label' => false]); ?>
              </div>
              
              <!-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div> -->
              <br>
              <button type="submit" class="btn btn-block btn-primary">Log In <i class="fa fa-sign-in"></i></button>

            <?= $this->Form->end() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
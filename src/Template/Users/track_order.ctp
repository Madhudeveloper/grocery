 <main class="main pages">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="<?php echo $this->Url->build('/'); ?>" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span class="active"></span> Track Orders
            </div>
        </div>
    </div>
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-3">
                            <?php echo $this->element('account_sidebar'); ?>
                        </div>
                        <div class="col-md-9">
                            <?php echo $this->Flash->render(); ?>
                            <div class="card-header" style="border-bottom: 2px solid #3BB77E;">
                                <h5 class="text-center">TRACK YOUR ORDER</h5>
                            </div>
                            <div class="card-body">
                              <div class="details-wrap">
                                     <div class="status_report">                          
                                        <ul class="list-unstyled order_status">
                                          <li class="<?php if($order['invoice_status'] >= 0){ echo "active"; } ?>">
                                            <div class="steps">
                                              <div>
                                                <label class="custom_checkbox"><i class="fa fa-truck" aria-hidden="true"></i>
                                                  <input type="checkbox" class="custom_input" />
                                                </label>
                                              </div>
                                              <div class="text"> Order <span>Received</span></div>
                                            </div>
                                          </li>
                                          <li class="<?php if($order['invoice_status'] >= 1){ echo "active"; } ?>">
                                            <div class="steps">
                                              <div>
                                                <label class="custom_checkbox"><i class="fa fa-truck" aria-hidden="true"></i>
                                                  <input type="checkbox" class="custom_input" />
                                                </label>
                                              </div>
                                              <div class="text">Order <span>Confirmed</span></div>
                                            </div>
                            
                                          </li>
                                          <li class="<?php if($order['invoice_status'] >= 2){ echo "active"; } ?>">
                                            <div class="steps">
                                              <div>
                                                <label class="custom_checkbox"><i class="fa fa-truck" aria-hidden="true"></i>
                                                  <input type="checkbox" class="custom_input" />
                                                </label>
                                              </div>
                                              <div class="text"> Order<span>Shipped</span></div>
                                            </div>
                                          </li>
                                          <li class="<?php if($order['invoice_status'] >= 3){ echo "active"; } ?>">
                                            <div class="steps">
                                              <div>
                                                <label class="custom_checkbox"><i class="fa fa-truck" aria-hidden="true"></i>
                                                  <input type="checkbox" class="custom_input" />
                                                </label>
                                              </div>
                                              <div class="text">  Order<span>Delivered</span></div>
                                            </div>
                                          </li>
                                        </ul>
                                    </div>
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

<style type="text/css">
    
    .status_report{
        padding: 30px;
        margin-bottom: 20px;
        border: 1px solid #ececec;
        background-color: #ffffff;
        margin-top: 10px;
        border-radius: 10px;
    }

    .order_status{
        display: flex;
        flex-flow: row wrap;
        justify-content: space-evenly;
        width: 100%;
    }

    .custom_checkbox{
        width: 100px;
        height: 100px;
        text-align: center;
        background-color: #fff;
        border-radius: 50%;
        border: 1px solid #ddd;
        color: #000;
    }

    .custom_input{
        position: absolute;
        left: -999999999px;
    }

    .order_status li.active .custom_checkbox {
        border-color: #3BB77E;
    }

    .order_status li .custom_checkbox {
        width: 100px;
        height: 100px;
        text-align: center;
        background-color: #fff;
        border-radius: 50%;
        border: 1px solid #ddd;
    }

    .order_status li .custom_checkbox i {
        line-height: 100px;
        font-size: 30px;
        transform: rotateY(180deg);
    }

    .order_status li {
        position: relative;
        flex-grow: 1;
        z-index: 1;
        display: flex;
        flex-flow: row wrap;
        /*justify-content: center;*/
    }

    .order_status li .steps {
        display: flex;
        flex-flow: column wrap;
        text-align: center;
        font-size: 14px;
    }

    .order_status li.active::after {
        border-color: #3BB77E;
    }

    .order_status li::after {
        content: '';
        position: absolute;
        top: 50px;
        right: 0;
        width: 50%;
        border-bottom: 1px solid #ddd;
        z-index: -1;
    }

    .order_status li.active+li::before {
        border-color: #3BB77E;
    }

    .order_status li::before {
        content: '';
        position: absolute;
        top: 50px;
        left: 0;
        width: 50%;
        border-bottom: 1px solid #ddd;
        z-index: -1;
    }

    .order_status li.active .steps {
        color: #3BB77E;
    }

</style>
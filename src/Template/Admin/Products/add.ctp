<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Product Category</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="<?php echo $this->Url->build('/'); ?>">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page header end -->
                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Basic Inputs Validation start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-refresh"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    
                               <?= $this->Form->create($product,['novalidate' => false, 'type' => 'file']) ?>
                                <div class="card-body">
                                    <?= $this->Flash->render() ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sub Category
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('product_sub_category_id',[ 'options' => $productSubCategories , 'class' => 'form-control' , 'label' => false , 'empty' => 'Select Product Sub Category']); ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Brand
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('brand_id',[ 'options' => $brands,'placeholder' => 'Brand' , 'class' => 'form-control' ,'empty' => 'Select Brand', 'label' => false]); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Product name
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('product_name',[ 'placeholder' => 'Product Name', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Product name']); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Product Slug
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('slug',[ 'placeholder' => 'Product slug', 'class' => 'form-control' , 'label' => false , 'empty' => 'Enter Product slug']); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="image_1" required="">
                                            </div>
                                             
                                            <div class="form-group">
                                                <input type="file" name="image_2" required="">
                                            </div>
                                            <br>
                                            <div class="col-sm-10" style="padding-left: 22px;">
                                                <div class="form-check form-check-inline">
                                                        <input class="form-check-input checkboxinput" type="checkbox" name="is_feature" id="check_is_feature" value="1">
                                                    <label class="form-check-label" style="font-size: 14px; padding-left: 4px;">FEATURED PRODUCTS</label>
                                                </div>
                                                &nbsp &nbsp &nbsp 
                                                <div class="form-check form-check-inline">
                                                        <input class="form-check-input checkboxinput" type="checkbox" name="is_popular" value="1" id="check_is_popular">
                                                     <label class="form-check-label" style="font-size: 14px; padding-left: 4px;">POPULAR PRODUCTS</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Product Description
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('product_description',[ 'placeholder' => 'Description of Product' , 'class' => 'form-control ' , 'label' => false  ]); ?>
                                            </div>
                                             <div class="form-group">
                                                <label>Deals of day
                                                <span class="text-danger">*</span></label>
                                                <input type="datetime-local" name="deals_end_day" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <hr>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <br>
                                            <h6 class="text-info">Enter Product Variants Details</h6>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row row_datas checkRowData">
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label>Variant Name
                                                <span class="text-danger">*</span></label>
                                                <?php
                                                    echo $this->Form->control('variant[]',['class' => 'form-control' , 'label' => false , 'placeholder' => ' Variant Name' ]);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label>UOM
                                                <span class="text-danger">*</span></label>
                                                <?php
                                                    echo $this->Form->control('uom_id[]',['options'=>$uom,'class' => 'form-control' , 'label' => false , 'placeholder' => 'HSN' ]);
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label>Price
                                                <span class="text-danger">*</span></label>
                                                <?php
                                                    echo $this->Form->control('price[]',['class' => 'form-control' , 'label' => false , 'placeholder' => 'Price' ]);
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label>Offer%
                                                <span class="text-danger">*</span></label>
                                                <?php
                                                    echo $this->Form->control('offer_percentage[]',['class' => 'form-control' , 'label' => false , 'placeholder' => 'Offer' ]);
                                                ?>
                                            </div>
                                        </div>


                                        <div class="col-md-1 col-sm-1">
                                            <div class="form-group">
                                                <label>GST%
                                                <span class="text-danger">*</span></label>
                                                <?php
                                                    echo $this->Form->control('gst_percentage[]',['class' => 'form-control' , 'label' => false , 'placeholder' => 'GST' ]);
                                                ?>
                                            </div>
                                        </div>



                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label>SKU
                                                <span class="text-danger">*</span></label>
                                                <?php
                                                    echo $this->Form->control('skucode[]',['class' => 'form-control' , 'label' => false , 'placeholder' => 'SKUCODE'  ]);
                                                ?>
                                            </div>
                                        </div>


                                        <div class="col-md-1 col-sm-1">
                                            <div class="form-group">
                                                <label>Action
                                                </label>
                                                <div class="col-md-12">

                                                    <button type="button" class="btn btn-primary btn-sm add_more">
                                                        + 
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="append_rows">
                                        
                                    
                                    <!--begin: Code-->
                                </div>
                                
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2 product_submit">Submit</button>
                                    <a href="<?php echo $this->Url->build('/admin/products'); ?>" class="btn btn-secondary">Cancel</a>
                                </div>
                            <?= $this->Form->end() ?>

                                </div>
                            </div>
                            <!-- Basic Inputs Validation end -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>



<script type="text/javascript">
    
    $(document).ready(function(){
        $('title').html('Add Products');
    });


    $(document).on('click','.product_submit',function(e){

        e.preventDefault();

        $('#loader').show();

        $('form#product').submit();


    });



    $(document).on('click','.add_more',function(){

        var html = $('.row_datas').clone();

        $(html).removeClass("row_datas");

        html.find('input').val('');

        html.find('button').addClass('remove_row');

        html.find('button').addClass('btn-danger');

        html.find('button').html('X');

        html.find('button').removeClass('add_more');

        html.find('button').removeClass('btn-primary');

        html.find('.igst').val(0);

        $('.append_rows').append(html);
    });


    $(document).on('click','.remove_row',function(){

        $(this).closest('.checkRowData').remove();

    });

</script>
<style type="text/css">
    .checkboxinput{
        height: 1rem;   
        width: 1rem;
    }

    .form-check-input:only-child {
    position: absolute;
}
</style>
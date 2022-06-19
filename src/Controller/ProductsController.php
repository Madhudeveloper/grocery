<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;


/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    public function beforeFilter(Event $event)
    {

        $this->Auth->allow(['index','category', 'view', 'myCart', 'checkout', 'addToCart', 'removeCart', 'updateCart', 'checkCoupons']);

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {  
        $this->viewBuilder()->setLayout('design');
        $this->loadModel('Products');
        $this->loadModel('ProductSubCategories');
        $this->loadModel('ProductVariants');
        $this->loadModel('Reviews');


        $new_products = $this->Products->find('all')->contain(['ProductVariants', 'reviews'])->toArray();

        // pr($new_products); die;

        $popular_products = $this->Products->find('all', [
            'contain' => ['ProductVariants'],
            'order' => ['rand()'],
            'limit' => 1
        ])->toArray();

        $products = $this->paginate($this->Products);

        $this->set(compact('products', 'popular_products', 'new_products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('design');
        
        $this->loadModel('ProductSubCategories');
        $this->loadModel('ProductVariants');
        $this->loadModel('Reviews');
        $this->loadModel('Uoms');



        $this->paginate = ['limit' => 9];

        $product = $this->Products->find('all',[
            'conditions' => ['Products.slug' => $id],
            'contain' => ['ProductSubCategories', 'Brands', 'reviews', 'ProductVariants' => ['Uoms'] ]
        ])->first();
        
        
        if(empty($product)){

            return $this->redirect('/');
        }

        $cartDetail = $this->request->getSession()->read('Cart');
        
        // pr($cartDetail); die;

        $related_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 6
        ])->toArray();


        $popular_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 6
        ])->toArray();

        $this->set(compact('product', 'related_products', 'popular_products'));
    }

    
    /** Category Dashboard **/
    public function category($id = null)
    {
        $this->loadModel('Products');
        $this->loadModel('ProductSubCategories');
        $this->loadModel('ProductVariants');
        $this->loadModel('Reviews');

        $this->viewBuilder()->setLayout('design');

        $category = $this->ProductSubCategories->find('all')->where(['slug' => $id])->first();

        // pr($category); die;
        
        $category_child = $this->Products->find('all')->where(['product_sub_category_id' => $category['id']])->toArray();

        // pr($category_child); die;   


        if(empty($category)){
            $category_child = $this->Products->find('all')->where([ 'id' => $category['id']])->toArray();
        }

        $categoryId = [];
        
        foreach($category_child as $key => $value){

            $categoryId[] = $value['id'];
        }
        
        $this->paginate = [
            'conditions' => [
                'Products.product_sub_category_id IN' => $categoryId,
                'Products.is_deleted' => 0 
            ],
            'contain' => ['ProductSubCategories', 'ProductVariants', 'reviews'],
            'limit' => 15
        ];

        $toprated_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 1
        ])->toArray();

        // pr($toprated_products); die;


        $products = $this->paginate($this->Products);

        $this->set(compact('products', 'category', 'toprated_products'));
    }
     

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $productSubCategories = $this->Products->ProductSubCategories->find('list', ['limit' => 200]);
        $brands = $this->Products->Brands->find('list', ['limit' => 200]);
        $this->set(compact('product', 'productSubCategories', 'brands'));
    }

    /** Adding  Product to cart **/

    public function addToCart()
    {
        $this->request->allowMethod('post');
        $data = $this->request->getData();
        
        $error = false;
        $errorIn = [];       
        if($data['quantity'] <= 0 || $data['quantity'] == NULL ) {
            $errorIn[] = ['field' => 'drop_of_locations', 'message' => __('quantity Must be Greater than zero')];
            $error = true;
        }
        if($error === true) {           
            echo json_encode(["message" => 'error', 'code' => 0, 'error' => $errorIn]);
            exit; 
        }else{
            $this->Cart->add_product($data);
            $count_items = $this->Cart->count_items();
            $retArr = array('message' => 'success', 'code' => 1, 'cart_count' => $count_items);
             echo json_encode($retArr);              
            exit;          
        }
    }


    /** Mycart **/
    public function myCart()
    {   
        $this->viewBuilder()->setLayout('design');

        $this->loadModel('Products');
        $this->loadModel('ProductVariants');
    
        $cartItems = $this->request->getSession()->read('Cart.Products');
        // pr($cartItems); die;

        $products = [];

        if(!empty($cartItems)) {
            foreach($cartItems as $key => $value)
            {
                $product = $this->Products->get($value['product_id']);
                $variant_id = $this->ProductVariants->get($value['variant_name']);

                $products[$key]['product_id']  = $product['id'];
                $products[$key]['variant_name'] = $variant_id['id'];
                $products[$key]['product_name'] = $variant_id['variant'];
                $products[$key]['product_image'] = $product['image_2'];
                $products[$key]['slug'] = $product['slug'];
                $products[$key]['quantity'] = $value['quantity'];
                $products[$key]['price'] = $variant_id['price'];
                $products[$key]['offer_percentage'] = $variant_id['offer_percentage'];
            }

        }

        $this->set(compact('products'));
    }

    /** Checkout**/ 

     public function checkout()
     {
        $this->viewBuilder()->setLayout('design');
        
        $this->loadModel('Orders');
        $this->loadModel('Products');
        $this->loadModel('Coupons');
        $this->loadModel('OrderInvoices');
        $this->loadModel('OrderProducts');
        $this->loadModel('ProductVariants');
        $this->loadModel('OrderStatus');


        $cartItems = $this->request->getSession()->read('Cart.Products');

        $authcheck = $this->Auth->User();

        if(empty($cartItems)){
            $this->Flash->success('No items on your cart for checkout');
            return $this->redirect('/products/my-cart');
        }

        $products = [];

        $sub_total = 0;

         if(!empty($cartItems)) {
            foreach($cartItems as $key => $value)
            {
                $product = $this->Products->get($value['product_id']);
                $variant_id = $this->ProductVariants->get($value['variant_name']);

                $products[$key]['product_id']  = $product['id'];
                $products[$key]['variant_name'] = $variant_id['id'];
                $products[$key]['product_name'] = $variant_id['variant'];
                $products[$key]['product_image'] = $product['image_2'];
                $products[$key]['slug'] = $product['slug'];
                $products[$key]['quantity'] = $value['quantity'];
                $products[$key]['price'] = $variant_id['price'];
                $products[$key]['offer_percentage'] = $variant_id['offer_percentage'];

                $discount = $variant_id['price'] * ($variant_id['offer_percentage'] / 100);

                $final_amount = ($variant_id['price'] - $discount);

                $sub_total = $final_amount * $value['quantity'];

                // pr($sub_total); die;


            }
        }


        if($this->request->is('post')){

            // Coupon Store Session 

        // $readCoupons = $this->Coupons->get($this->request->getSession()->read('Cart.Coupons')['coupon_id']);

        $readCoupons = $this->request->getSession()->read('Cart.Coupons', ['coupon_id']);

        if(!empty($readCoupons)){

            $view_coupon = $this->Coupons->find('all')->where(['id' == 'coupon_id'])->first();

            // $view_data = $view_coupon['coupon_percentage'];

            if(isset($view_coupon)){

                $discount = $sub_total * ($view_coupon['coupon_percentage'] /100);

                $final_discount = $sub_total - $discount;

                // pr($final_discount); die;

            }else{

            $view_coupon = [];

            }          

        }

            if(isset($this->request->getData()['cash_on_delivery']) && $this->request->getData()['cash_on_delivery'] == 'on'){
                $payment_type = 1;
            }else{
                $payment_type = 0;
            }
            
            $order = $this->Orders->newEntity();

            $coupons = $this->Coupons->find('all', [])->first();

            $couponCart = $this->request->getSession()->read('Cart.Coupons');

            // pr($couponCart); die;

            $product_orderNumber = rtrim(base64_encode(md5(microtime())),"=");

            $getOrder = $this->Orders->find('all',[
                'order' => ['id' => 'Desc']
            ])->first();

            if(!empty($getOrder)){
                $generateNumber = $getOrder['id']+1;   
             }else{
                $generateNumber = 1;
            }


            if ( date('m') > 3 ) {
                $year = date('Y') ;
            }
            else {
                $year = date('Y')-1;
            }
                        
            $start_year = substr( $year, -2);
            $end_date = $start_year+1;

            $orderNumber =  str_pad($generateNumber, 4, '0', STR_PAD_LEFT); 

            // pr($orderNumber); die;

            $order->order_number = $orderNumber;

            
            if(!empty($this->Auth->User('id'))){
                $order->user_id = $this->Auth->User('id');
            }else{
                $order->user_id = 0;
            }

            if(!empty($couponCart)){
                $order->coupon_id = $couponCart['coupon_id'];
            }else{
                $order->coupon_id = 0;
            }


            $order->sub_total = round($sub_total);

            $discount = $coupons['coupon_percentage'];

            $order->discount = $discount;

            // $coupon_id = $coupons['id'];
            // pr($coupon_id); die;

            // $order->coupon = $coupon_id;

            // // pr($order->coupon); die;

            $total = $sub_total * $coupons['coupon_percentage'] / 100;

            $final_total = round($sub_total - $total);

            $order->total = $final_total;

            $order->payment_type = $payment_type; 

            if($saveOrder = $this->Orders->save($order))
            {   
                $ccOrderId = $saveOrder['id'];

                $invoice = $this->OrderInvoices->newEntity();

                $invoice = $this->OrderInvoices->patchEntity($invoice, $this->request->getData());

                $invoice->order_id = $saveOrder['id'];

                $invoice->billing_name = $this->request->getData()['billing_name'];

                $invoice->billing_contact_1 = $this->request->getData()['billing_contact_1'];

                $invoice->billing_email = $this->request->getData()['billing_email'];

                $invoice->billing_street = $this->request->getData()['billing_street'];

                $invoice->billing_location  = $this->request->getData()['billing_location'];

                $invoice->billing_city = $this->request->getData()['billing_city'];

                $invoice->state = $this->request->getData()['state'];

                $invoice->billing_notes = $this->request->getData()['billing_notes'];

                $invoice->billing_pincode = $this->request->getData()['billing_pincode']; 

                $this->OrderInvoices->save($invoice);

                // $order_status = $this->OrderStatus->newEntity();

                // $order_status->order_id = $saveOrder['id'];

                // $status = [1 =>'Ordered', 2 => 'Delivered', 3 => 'In Transit'];

                // $order_status->status = $status[1];

                // // pr($order_status->status); die;

                // $this->OrderStatus->save($order_status);
        
                if(!empty($cartItems))
                {
                    foreach($cartItems as $key=> $value){

                        $product = $this->Products->get($value['product_id']);
                        $variant_id = $this->ProductVariants->get($value['variant_name']);

                        $products = $this->OrderProducts->newEntity();

                        $coupon_view = $this->Coupons->find('all', [])->first();

                        // $final_price = ($variant_id['price'] * $value['quantity'] - $coupon_view['coupon_percentage']);

                        $total = $sub_total * $coupons['coupon_percentage'] / 100;

                        $final_total = round($sub_total - $total);

                        $products->product_id = $product['id'];

                        $products->order_id = $saveOrder['id'];

                        $products->product_variant_id = $variant_id['id'];

                        $products->quantity = $value['quantity'];

                        $products->price = round($final_total);

                        // $products->gst_percentage = $variant_id['gst_percentage'];

                        $this->OrderProducts->save($products);
                    }
                } 

                if($payment_type == 0)
                {
                    $this->request->getSession()->write('Cart.Products');
                    $this->request->getSession()->write('Cart.Coupons');

                    $this->Flash->success('Order has been saved');
                    $this->redirect('/users/success');
                }
            }else{

                $this->Flash->error('Unable to save order');
            }

        }

        $this->set(compact('products', 'authcheck'));
     }


    /** Remove Cart Item **/
     public function removeCart($id = null)
    {
        $data['product_id'] = $id;
        $this->Cart->remove_item($data);            

        $this->Flash->success('Product has been removed from your cart');
        $this->redirect(['action' => 'myCart']);
            
    }

    /** Update Cart **/
    
    public function updateCart()
    {
       $this->loadComponent('Cart');

       $cartItems = $this->request->getSession()->read('Cart.Products');
       $data = $this->request->getdata();

       if (array_key_exists($data['product_id'], $cartItems))
       {

        $cartItems[$data['product_id']]['quantity'] = $data['quantity'];
        $this->request->getSession()->write('Cart.Products', $cartItems);
       }

       $this->Flash->success('Cart Quantity has been updated');

       echo json_encode(['message' => 1]);
       exit;
    }
    
    /** Coupons Method **/
    public function checkCoupons()
    {
        $this->loadModel('Coupons');
        $this->loadModel('Orders');

        $coupon_code= $this->request->getData()['coupon_code'];

        $getcoupon = $this->Coupons->find('all', [
          'conditions' => ['code' =>  $coupon_code, 'expiry_date >=' => date('Y-m-d')]
        ])->first();

        if(!empty($getcoupon)){
            if($getcoupon['is_active'] == 1)
            {
                $data['percentage'] = $getcoupon['coupon_percentage'];

                $data['status'] = 1;

                echo json_encode($data);

                $this->request->getSession()->write('Cart.Coupons', ['coupon_id' => $getcoupon['id']]);

            }else {

                $data['status'] = 2;

                echo json_encode($data); 
            }

        }else{
            $data['status'] = 0;

            echo json_encode($data); 
        }

        exit;
    }

}    
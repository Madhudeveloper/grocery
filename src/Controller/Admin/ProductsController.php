<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Products Controller
 *
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('backend_dashboard');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $products = $this->Products->find('all',[
            'contain' => ['brands','productSubCategories'],
            'conditions' => ['Products.is_deleted' => 0]
        ])->toArray();

        // pr($products); die;

        $this->set(compact('products'));
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
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);

        $this->set('product', $product);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('ProductVariants');

        $product = $this->Products->newEntity();


        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());

            // pr($product); die;

            // pr($this->request->getData()); die;

            if(isset($this->request->getData()["image_1"]) && !empty($this->request->getData()["image_1"]['tmp_name'])){

                 $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image_1']['tmp_name'], WWW_ROOT . 'uploads/products' . DS . $uniqueId ."_".$this->request->getData()['image_1']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image_1']['name'], '.')), 1);
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png');
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $product->image_1 = $uniqueId ."_".$this->request->getData()['image_1']['name'];
                    }
            }
            
            if(isset($this->request->getData()["image_2"]) && !empty($this->request->getData()["image_2"]['tmp_name'])){

                 $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image_2']['tmp_name'], WWW_ROOT . 'uploads/products' . DS . $uniqueId ."_".$this->request->getData()['image_2']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image_2']['name'], '.')), 1);
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png');
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $product->image_2 = $uniqueId ."_".$this->request->getData()['image_2']['name'];
                    }
            }

            if ($savedProduct = $this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

               foreach ($this->request->getData()['variant'] as $key => $value) {
                
                $productVariant = $this->ProductVariants->newEntity();
                
                $productVariant->product_id = $savedProduct['id'];
                $productVariant->variant = $this->request->getData()['variant'][$key];
                $productVariant->uom_id = $this->request->getData()['uom_id'][$key];
                $productVariant->price = $this->request->getData()['price'][$key];
                $productVariant->offer_percentage = $this->request->getData()['offer_percentage'][$key];
                $productVariant->gst_percentage = $this->request->getData()['gst_percentage'][$key];
                $productVariant->skucode = $this->request->getData()['skucode'][$key];

                $this->ProductVariants->save($productVariant);
               }
                return $this->redirect('/admin/products/index');
                $this->Flash->success(__('The Product Variant has been saved.'));
               }


            
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $productSubCategories = $this->Products->ProductSubCategories->find('list', ['limit' => 200]);
        $brands = $this->Products->Brands->find('list', ['limit' => 200]);
        $uom = $this->ProductVariants->Uoms->find('list', ['limit' => 200]);
        $this->set(compact('product', 'productSubCategories', 'brands', 'uom'));
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
        $this->loadModel('ProductVariants');

        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());

            // pr($product); die;

            if(!isset($this->request->getData()['is_feature'])){
                $product->is_feature = 0;
            }

            if(!isset($this->request->getData()['is_popular'])){
                $product->is_popular = 0;
            }
            
            // pr($this->request->getData()); die;

            if(isset($this->request->getData()["image_1"]) && !empty($this->request->getData()["image_1"]['tmp_name'])){

                 $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image_1']['tmp_name'], WWW_ROOT . 'uploads/products' . DS . $uniqueId ."_".$this->request->getData()['image_1']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image_1']['name'], '.')), 1); 

                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); 
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $product->image_1 = $uniqueId ."_".$this->request->getData()['image_1']['name'];
                    }
            }else{
                $product->image_1 = $this->request->getData()['hid_image_1'];
            }

            if(isset($this->request->getData()["image_2"]) && !empty($this->request->getData()["image_2"]['tmp_name'])){

                 $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image_2']['tmp_name'], WWW_ROOT . 'uploads/products' . DS . $uniqueId ."_".$this->request->getData()['image_2']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image_2']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $product->image_2 = $uniqueId ."_".$this->request->getData()['image_2']['name'];
                    }
            }else{
                $product->image_2 = $this->request->getData()['hid_image_2'];
            }

           if ($savedProduct = $this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

               foreach ($this->request->getData()['variant'] as $key => $value) {
                
                $productVariant = $this->ProductVariants->newEntity();
                $productVariant->product_id = $savedProduct['id'];
                $productVariant->variant = $this->request->getData()['variant'][$key];
                $productVariant->uom_id = $this->request->getData()['uom_id'][$key];
                $productVariant->price = $this->request->getData()['price'][$key];
                $productVariant->offer_percentage = $this->request->getData()['offer_percentage'][$key];
                $productVariant->gst_percentage = $this->request->getData()['gst_percentage'][$key];
                $productVariant->skucode = $this->request->getData()['skucode'][$key];

                $this->ProductVariants->save($productVariant);
               }
                return $this->redirect('/admin/products/index');
                $this->Flash->success(__('The Product Variant has been saved.'));
               }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $productCategories = $this->Products->ProductSubCategories->find('list', ['limit' => 200]);
        $productSubCategories = $this->Products->ProductSubCategories->find('list', ['limit' => 200]);
        $brands = $this->Products->Brands->find('list', ['limit' => 200]);
        $uom = $this->ProductVariants->Uoms->find('list', ['limit' => 200]);
        $this->set(compact('product', 'productCategories', 'productSubCategories', 'brands', 'uom'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /** Get Subcategory **/

    // public function getSubCategory()
    // {
    //    $this->viewBuilder()->setLayout('backend_dashboard');

    //    $this->loadModel('ProductSubCategories');

    //    if($this->request->is('post')){
    //     $category = $this->ProductSubCategories->find('all', array('conditions' => array('product_category_id' => $this->request->getData()['category']
    //     ),
    //         'order' => 'id ASC'
    //     ));
    //    }

    //   echo json_encode(['category' => $category]);

    //   exit;

    // }

    public function inventory()
    {
        $product_inventories = $this->Products->find('all',[
            'contain' => ['ProductVariants'],
            'conditions' => ['Products.is_deleted' => 0]
        ])->toArray();

        // pr($product_inventories); die;

        $this->set(compact('product_inventories'));

    }

    public function changeStatus()
    {
        $is_feature = $this->Products->get($this->request->getData()['id']);

        $is_feature->is_feature = $this->request->getData()['is_feature'];

        $is_popular = $this->Products->get($this->request->getData()['id']);

        $is_popular->is_popular = $this->request->getData()['is_popular'];

        $this->Products->save($is_feature, $is_popular);

        exit;
    }
}

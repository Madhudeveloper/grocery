<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\I18n\Date;
use Cake\I18n\Time;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
  public function beforeFilter(Event $event)
    {

      $this->Auth->allow(['index','aboutUs', 'contactUs', 'privacyPolicy', 'termsConditions']);

    }

    public function index()
    {
      $this->viewBuilder()->setLayout('design');
      $this->loadModel('Products');
      $this->loadModel('ProductVariants');
      $this->loadModel('Homebanners');
      $this->loadModel('Subbanners');
      $this->loadModel('Reviews');
    

      $deal_products = $this->Products->find('all' , array('conditions' => array('Products.deals_end_day IS NOT NULL', 'Products.deals_end_day >' => date('Y-m-d'))))->contain(['productVariants', 'reviews'])->toArray();
    
      $popular_products = $this->Products->find('all')->contain(['productVariants', 'reviews'])->where(['is_popular'=> 1])->toArray();

      // pr($popular_products); die;

      $featured_products = $this->Products->find('all')->contain(['productVariants', 'reviews'])-> where(['is_feature'=> 1])->toArray();

      // pr($featured_products); die;

      $homebanners = $this->Homebanners->find('all', [])->toArray();
      
      $subbanners = $this->Subbanners->find('all', [])->toArray();
     
      $related_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 2
        ])->toArray();

      // pr($related_products); die;

       $topselling_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 3
        ])->toArray();

       $trending_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 3
        ])->toArray();

       $recently_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 3
        ])->toArray();

       $toprated_products = $this->Products->find('all',[
            'order' => ['rand()'],
            'contain' => ['ProductVariants', 'reviews'],
            'limit' => 3
        ])->toArray();

      $this->set(compact('homebanners', 'subbanners', 'related_products',  'deal_products', 'popular_products', 'featured_products', 'topselling_products', 'trending_products', 'recently_products', 'toprated_products'));

    }

    public function aboutUs()
    {
      $this->viewBuilder()->setLayout('design');
        
    }

    public function contactUs()
    {
      $this->viewBuilder()->setLayout('design'); 
      $this->loadModel('Enquiries');

      $contactEnquiries = $this->Enquiries->newEntity();
      if($this->request->is('post')){
        $contactEnquiries = $this->Enquiries->patchEntity($contactEnquiries, $this->request->getData());
         if ($this->Enquiries->save($contactEnquiries)) {
            $this->Flash->success(__('Enquiries has been Saved'));
            // return $this->redirect(['action' => 'index']);
          }
        $this->Flash->error(__('Enquiries could not be saved. Please, try again.'));
      }

      $this->set(compact('contactEnquiries'));
    }


    public function privacyPolicy()
    {
      $this->viewBuilder()->setLayout('design'); 
    }


    public function termsConditions()
    {
      $this->viewBuilder()->setLayout('design'); 
    }


    public function invoice()
    {
      $this->viewBuilder()->setLayout('invoice_design'); 
      $this->loadModel('Settings');
      $this->loadModel('SocialLinks');
      $this->loadModel('Products');
      $this->loadModel('ProductVariants');
      $this->loadModel('OrderInvoices');
      $this->loadModel('Orders');

      $get_settings = $this->Settings->get(1);
      $get_social_links = $this->SocialLinks->get(1);

      $cartItems = $this->request->getSession()->read('Cart.Products');

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
                $products[$key]['skucode'] = $variant_id['skucode'];

            }
        }

        $order_invoices = $this->Products->find('all',[
            'contain' => ['OrderInvoices'],
        ])->toArray();


        // pr($order_invoices); die;

      $this->set(compact('get_settings', 'get_social_links', 'products', 'order_invoices'));
    }
}

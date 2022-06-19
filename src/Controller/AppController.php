<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Cart');

        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authenticate' => [
            'Form' => [
                'fields' => ['username' => 'email', 'password' => 'password'],
                ]
            ],
            'authError' => 'Please Login Here',
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Users',               
            ],
        ]);

    }

    public function beforeRender(Event $event)
    {
       $this->loadModel('ProductCategories');
       $this->loadModel('Headermarketing');
       $this->loadModel('SocialLinks');
       $this->loadModel('Settings');
       $this->loadModel('AboutPages');
       $this->loadModel('ContactPages');
       $this->loadComponent('Cart');
       $this->loadModel('Coupons');
       $this->loadModel('Reviews');
       $this->loadModel('Products');

        // $cartItems = $this->request->getSession()->read('Cart.Products');
        // pr( $cartItems); die;

       
        $product_categories = $this->ProductCategories->find('all')->contain(['ProductSubCategories'])->toArray();

        $get_social_links = $this->SocialLinks->get(1);
      
        $get_settings = $this->Settings->get(1);

        $get_header_marketing = $this->Headermarketing->get(1);

        $get_about_pages = $this->AboutPages->get(1);

        $get_contact_pages = $this->ContactPages->get(1);

        $get_whole_cart = $this->Cart->get_whole_cart();
        
        if(!empty($get_whole_cart)){
            if(!empty($get_whole_cart['Products'])){
                $get_count_cart = count($get_whole_cart['Products']);
            }else{
                $get_count_cart = 0;
            }
            
        }else{
            $get_count_cart = 0;
        }

        $product_menu = $this->Products->find('all', [
            'order' => ['rand()'],
            'limit' => 5,
        ])->toArray();

        $timer_products = $this->Products->find('all' , array('conditions' => array('Products.deals_end_day IS NOT NULL', 'Products.deals_end_day >' => date('Y-m-d'))))->contain(['productVariants', 'reviews'])->toArray();

        // pr($timer_products); die;

        $this->set(compact('product_categories', 'get_social_links', 'get_settings', 'get_header_marketing', 'get_about_pages', 'get_contact_pages', 'get_count_cart', 'product_menu', 'timer_products'));
    }

    public function isAuthorized($user) { 
       return true;            
    }
}

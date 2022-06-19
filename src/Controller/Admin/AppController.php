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
namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;   
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'authenticate' => [
            'Form' => [
                'fields' => ['username' => 'email', 'password' => 'password'],
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authError' => 'Please Login Here',
            'storage' => [
                'className' => 'Session',
                'key' => 'Auth.Admin',               
            ],
        ]);
    }

     public function beforeRender(Event $event)
    {
        $this->loadModel('Products');
        $this->loadModel('Orders');
        $this->loadModel('Reviews');
        $this->loadModel('OrderProducts');
        $this->loadModel('OrderInvoices');
        $this->loadModel('Settings');
        $this->loadModel('SocialLinks');


        $totalProducts = $this->Products->find('all', [
            'conditions' => ['is_deleted' => 0]
        ])->toarray();

        $totalReviews = $this->Reviews->find('all', [])->toarray();

        $recently_orders = $this->Orders->find('all', [])->toarray();

        $get_social_links = $this->SocialLinks->get(1);

        $get_settings = $this->Settings->get(1);

        // pr($get_settings); die;

        $conn = ConnectionManager::get('default');

        $order_total = $conn->execute("SELECT SUM(total) As total FROM orders WHERE status IN (1,2,3) ")->fetchAll('assoc');

        $total_orders = $this->Orders->find('all', [])->toarray();

        // pr($total_orders); die;

        $today_orders = $conn->execute("SELECT SUM(total) As total FROM orders WHERE created > now() ")->fetchAll('assoc');

        // pr($today_orders); die;

        $this->set(compact('totalProducts', 'order_total', 'totalReviews', 'recently_orders', 'total_orders', 'today_orders', 'get_social_links', 'get_settings'));
    }

    public function isAuthorized($user)
    {
        if($user['user_role_id'] != 1){

           return false;
        }
        
        return true;
    }
}

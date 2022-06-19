<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Client;
use Cake\Routing\Router;
use Cake\Core\Configure;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

   public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['login' , 'logout' ,'register', 'forgetPassword', 'changePassword']);
    }

    public function success()
    {
      $this->viewBuilder()->setLayout('design');  
    }

    /** Login User **/
    public function login()
    {
        $this->viewBuilder()->setLayout('design');

        if(!empty( $this->request->getSession()->read('Auth.Users')) ){
        return $this->redirect(['action' => 'dashboard' ]);
      }

      if(isset($_GET['redirect'])) {
        $redirect = $_GET['redirect'];
      }else{
        $redirect = '';
      }
      
      if($this->request->is('post')){
         $user = $this->Auth->identify();
         if($user) {
            if($user['status'] == 1){
                if($user['user_role_id'] == 3){
                    $this->Auth->setUser($user);
                    $this->Flash->success(__('Logged in successfully'));

                    if($redirect) {
                        return $this->redirect($redirect);
                    }

                    return $this->redirect($this->Auth->redirectUrl());
                }else{
                    $this->Flash->error(__('Admin Not Allowed to login'));
                    return $this->redirect($this->Auth->logout());
                }

            }else{
                $this->Flash->error(__('Your account has not verified , Please check your email for verification'));
                return $this->redirect($this->logout());
            }
         }else{
            $this->Flash->error(__('Invalid Username and Password'));
         }
      }

      $this->set(compact('redirect'));

    }

    
    /** Register User **/
    public function register()
    {
        $this->viewBuilder()->setLayout('design');

        $user = $this->Users->newEntity();

        if($this->request->is('post'))
        {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            // pr($this->request->getData()); die;

            if(!empty($user->getErrors()))
            {
                foreach($user->getErrors() as $key => $values)
                {
                    foreach ($value as $key => $values) {
                        $this->Flash->error(__($values));
                    }
                }
                return $this->redirectUrl($this->referer());
            }
            else
            {
                $user->user_role_id = 3;
                $user->status = 1;
               
               if($result = $this->Users->save($user))
               {
                $this->Auth->setUser($user);

                $this->Flash->success(__('Logged in successfully'));

                return $this->redirect($this->Auth->redirectUrl());

               }
               else
               {
                $this->Flash->error(__('User has been Register successfully'));

                return $this->redirect($this->referer());
               }

            }
        }

        $this->set(compact('user'));
    }

    /** Dashboard **/
    public function dashboard ()
    {
       $this->viewBuilder()->setLayout('design');
    }

    public function editAccount ()
    {
       $this->viewBuilder()->setLayout('design');

       $user = $this->Users->get($this->Auth->User('id'));

       if ($this->request->is(['post','patch','put'])) {

          $user = $this->Users->patchEntity($user , $this->request->getData());

           if(!empty($user->getErrors())){
                foreach ($user->getErrors() as $key => $value) {
                    foreach ($value as $key => $values) {
                        $this->Flash->error(__($values));
                    }
                }
            }else{
                if ($this->Users->save($user)) {
                    $this->Flash->success('Your account information has been updated successfully');
                } else {
                    $this->Flash->error('Try again later');
                }
            }
        } 

        $this->set(compact('user'));
    }

    /** Change Password **/

    public function changePassword()
    {
        $this->viewBuilder()->setLayout('design');
        
        $user =$this->Users->get($this->Auth->user('id'));
        if (!empty($this->request->getData())) {
            $user = $this->Users->patchEntity($user, [
                    'old_password'  => $this->request->getData()['old_password'],
                    'password'      => $this->request->getData()['password'],
                    'confirm_password'     => $this->request->getData()['confirm_password']
                ],
                ['validate' => 'password']
            );
            $error = '';
            if(!empty($user->getErrors())){
                foreach ($user->getErrors() as $key => $value) {
                    foreach ($value as $key => $values) {
                        $this->Flash->error(__($values));
                    }
                }
            }else{
                if ($this->Users->save($user)) {
                    $this->Flash->success('Your password has been changed successfully');
                    $this->redirect(['action' => 'changePassword']);
                } else {
                    $this->Flash->error('Old Password Does Not Match');
                }
            }
        }

        $pageTitle = "Grocery | Change Password";

        $this->set(compact('pageTitle'));

        $this->set('user',$user);

    }

    /** My Orders **/

    public function myOrders()
    {
       $this->viewBuilder()->setLayout('design');
       $this->loadModel('Orders');

       $orders = $this->Orders->find('all', [
        // 'conditions' => ['user_id' => $this->Auth->User('id'), 'status' => 1],
        'order' => ['id' => 'ASC']
       ])->toArray();

    // debug($orders); die;

        $this->set(compact('orders'));

    }

    public function viewOrder($id = null)
    {
        $this->viewBuilder()->setLayout('design');
        $this->loadModel('Products');
        $this->loadModel('Uoms');
        $this->loadModel('OrderProducts');
        $this->loadModel('ProductVariants');
        $this->loadModel('Orders');

        $orders = $this->Orders->find('all',[
            'contain' => ['OrderProducts' => [ 'Products', 'ProductVariants' => ['Uoms']]]
        ])->toArray();

        // debug($orders); die; 


        $this->set(compact('orders'));

    }

    public function trackOrder($id=null)
    {
        $this->viewBuilder()->setLayout('design');
        $this->loadModel('Orders');

        $order = $this->Orders->find('all',[
            // 'conditions' => ['Orders.user_id' => $this->Auth->User('id'), 'Orders.id' => $id , 'Orders.status' => 1],
            'contain' => ['OrderInvoices']
        ])->first();

        // debug($order); die;

        if(empty($order )){
            return $this->redirect(['action' => 'dashboard']);
        }

        $this->set(compact('order'));
    }

   /** Logout Method **/
    public function logout()
    {
         $this->Flash->success('You have successfully logged out');

         return $this->redirect($this->Auth->logout());
    }

    /** Forget Password **/

    public function forgetPassword()
    {
      $this->viewBuilder()->setLayout('design');  

    }

}

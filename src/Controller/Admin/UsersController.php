<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login']);
        $this->viewBuilder()->setLayout('backend_dashboard');
    }


    public function dashboard()
    {
        // $this->viewBuilder()->setLayout('backend_dashboard');
    }


    public function login()
    {
        $this->viewBuilder()->setLayout('admin_login');
        
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();

            if($user)
            {
                $this->Auth->setUser($user);

                $this->Flash->success(__('logged in successfully'));

                return $this->redirect($this->Auth->redirectUrl());
            }
            else
            {
                $this->Flash->error(__('Invalid username or password'));
            }
        }
    }
       
    /** Logout Method **/   
    public function logout()
    {

        $this->Flash->success('You are now logged out.');

        return $this->redirect($this->Auth->logout());

    }   

    /** Delete Method **/
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /** Change Password **/

    public function changePassword()
    {
       $user =$this->Users->get($this->Auth->user('id'));
       // pr($user); die;
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
        $this->set('user',$user);
    }

    /** Cahnge Status **/

    public function changeStatus()
    {

        $status = $this->Users->get($this->request->getData()['id']);

        $status->status = $this->request->getData()['status'];

        $this->Users->save($status);

        exit;
    }

    public function index()
    {

       $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

}

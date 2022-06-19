<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Settings Controller
 *
 *
 * @method \App\Model\Entity\Setting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SettingsController extends AppController
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
        $settings = $this->paginate($this->Settings);

        $this->set(compact('settings'));
    }

    /**
     * View method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $setting = $this->Settings->get($id, [
            'contain' => [],
        ]);

        $this->set('setting', $setting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $setting = $this->Settings->newEntity();
        if ($this->request->is('post')) {
            $setting = $this->Settings->patchEntity($setting, $this->request->getData());

            // pr($setting); die;
            
            if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){


                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/logo' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $setting->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }

            }

            if(isset($this->request->getData()['loader_image']) && !empty($this->request->getData()['loader_image']['tmp_name'])){


                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['loader_image']['tmp_name'], WWW_ROOT . 'uploads/logo' . DS . $uniqueId ."_".$this->request->getData()['loader_image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['loader_image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $setting->loader_image = $uniqueId ."_".$this->request->getData()['loader_image']['name'];
                    }

            }

            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The setting could not be saved. Please, try again.'));
        }
        $this->set(compact('setting'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $setting = $this->Settings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setting = $this->Settings->patchEntity($setting, $this->request->getData());
            
            if(isset($this->request->getData()["image"]) && !empty($this->request->getData()["image"]['tmp_name'])){

                 $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/logo' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); 

                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); 
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $setting->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }
            }else{
                $setting->image = $this->request->getData()['hid_image'];
            }

            if(isset($this->request->getData()['loader_image']) && !empty($this->request->getData()['loader_image']['tmp_name'])){


                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['loader_image']['tmp_name'], WWW_ROOT . 'uploads/logo' . DS . $uniqueId ."_".$this->request->getData()['loader_image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['loader_image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $setting->loader_image = $uniqueId ."_".$this->request->getData()['loader_image']['name'];
                    }

            }else{
                $setting->loader_image = $this->request->getData()['hid_loader_image'];
            }


            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The setting could not be saved. Please, try again.'));
        }
        $this->set(compact('setting'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $setting = $this->Settings->get($id);
        if ($this->Settings->delete($setting)) {
            $this->Flash->success(__('The setting has been deleted.'));
        } else {
            $this->Flash->error(__('The setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

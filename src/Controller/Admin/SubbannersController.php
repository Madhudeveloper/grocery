<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Subbanners Controller
 *
 *
 * @method \App\Model\Entity\Subbanner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubbannersController extends AppController
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
        $subbanners = $this->paginate($this->Subbanners);

        $this->set(compact('subbanners'));
    }

    /**
     * View method
     *
     * @param string|null $id Subbanner id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subbanner = $this->Subbanners->get($id, [
            'contain' => [],
        ]);

        $this->set('subbanner', $subbanner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subbanner = $this->Subbanners->newEntity();
        if ($this->request->is('post')) {
            $subbanner = $this->Subbanners->patchEntity($subbanner, $this->request->getData());

            // pr($subbanner); die;

            if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){

                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/subbanner' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $subbanner->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }

            }

            if ($this->Subbanners->save($subbanner)) {
                $this->Flash->success(__('The subbanner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subbanner could not be saved. Please, try again.'));
        }
        $this->set(compact('subbanner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subbanner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subbanner = $this->Subbanners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subbanner = $this->Subbanners->patchEntity($subbanner, $this->request->getData());

            if(isset($this->request->getData()["image"]) && !empty($this->request->getData()["image"]['tmp_name'])){

                 $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/subbanner' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); 

                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); 
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $subbanner->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }
            }else{
                $subbanner->image = $this->request->getData()['hid_image'];
            }

            if ($this->Subbanners->save($subbanner)) {
                $this->Flash->success(__('The subbanner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subbanner could not be saved. Please, try again.'));
        }
        $this->set(compact('subbanner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subbanner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subbanner = $this->Subbanners->get($id);
        if ($this->Subbanners->delete($subbanner)) {
            $this->Flash->success(__('The subbanner has been deleted.'));
        } else {
            $this->Flash->error(__('The subbanner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

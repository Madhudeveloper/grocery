<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Homebanners Controller
 *
 *
 * @method \App\Model\Entity\Homebanner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomebannersController extends AppController
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
        $homebanners = $this->paginate($this->Homebanners);

        $this->set(compact('homebanners'));
    }

    /**
     * View method
     *
     * @param string|null $id Homebanner id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homebanner = $this->Homebanners->get($id, [
            'contain' => [],
        ]);

        $this->set('homebanner', $homebanner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homebanner = $this->Homebanners->newEntity();
        if ($this->request->is('post')) {
            $homebanner = $this->Homebanners->patchEntity($homebanner, $this->request->getData());

            // pr($this->request->getData()); die;

            if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){


                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/slider' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $homebanner->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }

            }

            if ($this->Homebanners->save($homebanner)) {

                $this->Flash->success(__('The homebanner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homebanner could not be saved. Please, try again.'));
        }
        $this->set(compact('homebanner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Homebanner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        
        $homebanner = $this->Homebanners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homebanner = $this->Homebanners->patchEntity($homebanner, $this->request->getData());

            if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){


                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/slider' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $homebanner->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }

            }else{

                $homebanner->image = $this->request->getData()['image_hid'];
            }

            if ($this->Homebanners->save($homebanner)) {
                $this->Flash->success(__('The homebanner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homebanner could not be saved. Please, try again.'));
        }
        $this->set(compact('homebanner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Homebanner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homebanner = $this->Homebanners->get($id);
        if ($this->Homebanners->delete($homebanner)) {
            $this->Flash->success(__('The homebanner has been deleted.'));
        } else {
            $this->Flash->error(__('The homebanner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

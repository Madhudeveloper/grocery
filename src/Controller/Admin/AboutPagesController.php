<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * AboutPages Controller
 *
 *
 * @method \App\Model\Entity\AboutPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AboutPagesController extends AppController
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
        $aboutPages = $this->paginate($this->AboutPages);

        $this->set(compact('aboutPages'));
    }

    /**
     * View method
     *
     * @param string|null $id About Page id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aboutPage = $this->AboutPages->get($id, [
            'contain' => [],
        ]);

        $this->set('aboutPage', $aboutPage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aboutPage = $this->AboutPages->newEntity();
        if ($this->request->is('post')) {
            $aboutPage = $this->AboutPages->patchEntity($aboutPage, $this->request->getData());

            if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){

                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/aboutus' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $aboutPage->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }

            }

            if ($this->AboutPages->save($aboutPage)) {
                $this->Flash->success(__('The about page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about page could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutPage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id About Page id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aboutPage = $this->AboutPages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aboutPage = $this->AboutPages->patchEntity($aboutPage, $this->request->getData());

            if(isset($this->request->getData()['image']) && !empty($this->request->getData()['image']['tmp_name'])){

                    $uniqueId = uniqid();

                 if(move_uploaded_file($this->request->getData()['image']['tmp_name'], WWW_ROOT . 'uploads/aboutus' . DS . $uniqueId ."_".$this->request->getData()['image']['name']))
                    {

                        $ext = substr(strtolower(strrchr($this->request->getData()['image']['name'], '.')), 1); //get the extension
                    
                        $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                        if(!in_array($ext, $arr_ext))
                        {
                            $this->Flash->error(__('Please upload only images'));
                            return $this->redirect($this->referer());  
                        }
                       
                        $aboutPage->image = $uniqueId ."_".$this->request->getData()['image']['name'];
                    }

            }else{
                $aboutPage->image = $this->request->getData()['hid_image'];
            }

            if ($this->AboutPages->save($aboutPage)) {
                $this->Flash->success(__('The about page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about page could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutPage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id About Page id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aboutPage = $this->AboutPages->get($id);
        if ($this->AboutPages->delete($aboutPage)) {
            $this->Flash->success(__('The about page has been deleted.'));
        } else {
            $this->Flash->error(__('The about page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

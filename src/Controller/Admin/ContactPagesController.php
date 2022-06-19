<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * ContactPages Controller
 *
 *
 * @method \App\Model\Entity\ContactPage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactPagesController extends AppController
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
        $contactPages = $this->paginate($this->ContactPages);

        $this->set(compact('contactPages'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Page id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactPage = $this->ContactPages->get($id, [
            'contain' => [],
        ]);

        $this->set('contactPage', $contactPage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactPage = $this->ContactPages->newEntity();
        if ($this->request->is('post')) {
            $contactPage = $this->ContactPages->patchEntity($contactPage, $this->request->getData());
            if ($this->ContactPages->save($contactPage)) {
                $this->Flash->success(__('The contact page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact page could not be saved. Please, try again.'));
        }
        $this->set(compact('contactPage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Page id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactPage = $this->ContactPages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactPage = $this->ContactPages->patchEntity($contactPage, $this->request->getData());
            if ($this->ContactPages->save($contactPage)) {
                $this->Flash->success(__('The contact page has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact page could not be saved. Please, try again.'));
        }
        $this->set(compact('contactPage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Page id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactPage = $this->ContactPages->get($id);
        if ($this->ContactPages->delete($contactPage)) {
            $this->Flash->success(__('The contact page has been deleted.'));
        } else {
            $this->Flash->error(__('The contact page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

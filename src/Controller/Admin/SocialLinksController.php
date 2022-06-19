<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * SocialLinks Controller
 *
 *
 * @method \App\Model\Entity\SocialLink[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SocialLinksController extends AppController
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
        $socialLinks = $this->paginate($this->SocialLinks);

        $this->set(compact('socialLinks'));
    }

    /**
     * View method
     *
     * @param string|null $id Social Link id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialLink = $this->SocialLinks->get($id, [
            'contain' => [],
        ]);

        $this->set('socialLink', $socialLink);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialLink = $this->SocialLinks->newEntity();
        if ($this->request->is('post')) {
            $socialLink = $this->SocialLinks->patchEntity($socialLink, $this->request->getData());
            // pr($socialLink); die;
            if ($this->SocialLinks->save($socialLink)) {
                $this->Flash->success(__('The social link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social link could not be saved. Please, try again.'));
        }
        $this->set(compact('socialLink'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Link id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialLink = $this->SocialLinks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialLink = $this->SocialLinks->patchEntity($socialLink, $this->request->getData());
            if ($this->SocialLinks->save($socialLink)) {
                $this->Flash->success(__('The social link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social link could not be saved. Please, try again.'));
        }
        $this->set(compact('socialLink'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Link id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialLink = $this->SocialLinks->get($id);
        if ($this->SocialLinks->delete($socialLink)) {
            $this->Flash->success(__('The social link has been deleted.'));
        } else {
            $this->Flash->error(__('The social link could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * ProductCategories Controller
 *
 * @property \App\Model\Table\ProductCategoriesTable $ProductCategories
 *
 * @method \App\Model\Entity\ProductCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductCategoriesController extends AppController
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
        $productCategories = $this->ProductCategories->find('all')->toArray();

        $productCategory = $this->ProductCategories->newEntity();
        
        if ($this->request->is('post')) {
            $productCategory = $this->ProductCategories->patchEntity($productCategory, $this->request->getData());
            if ($this->ProductCategories->save($productCategory)) {
                $this->Flash->success(__('The product category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product category could not be saved. Please, try again.'));
        }
     

        $this->set(compact('productCategories','productCategory'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productCategory = $this->ProductCategories->get($id, [
            'contain' => [],
        ]);

        $this->set('productCategory', 'productCategory');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        // $this->loadModel('ProductCategories');

        $productCategory = $this->ProductCategories->newEntity();
        if ($this->request->is('post')) {
            $productCategory = $this->ProductCategories->patchEntity($productCategory, $this->request->getData());
            // pr($productCategory); die;
            if ($this->ProductCategories->save($productCategory)) {
                $this->Flash->success(__('The product category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product category could not be saved. Please, try again.'));
        }
        $this->set(compact('productCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productCategory = $this->ProductCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productCategory = $this->ProductCategories->patchEntity($productCategory, $this->request->getData());
            if ($this->ProductCategories->save($productCategory)) {
                $this->Flash->success(__('The product category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product category could not be saved. Please, try again.'));
        }
        $this->set(compact('productCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productCategory = $this->ProductCategories->get($id);
        if ($this->ProductCategories->delete($productCategory)) {
            $this->Flash->success(__('The product category has been deleted.'));
        } else {
            $this->Flash->error(__('The product category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * ProductSubCategories Controller
 *
 *
 * @method \App\Model\Entity\ProductSubCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductSubCategoriesController extends AppController
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
        $productSubCategories = $this->ProductSubCategories->find('all',[
            'contain' => ['productCategories']
        ])->toArray();

        // pr($productSubCategories); die;

        $this->set(compact('productSubCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Sub Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productSubCategory = $this->ProductSubCategories->get($id, [
            'contain' => [],
        ]);

        $this->set('productSubCategory', $productSubCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productSubCategory = $this->ProductSubCategories->newEntity();
        if ($this->request->is('post')) {
            $productSubCategory = $this->ProductSubCategories->patchEntity($productSubCategory, $this->request->getData());
            // pr($productSubCategory); die;
            if ($this->ProductSubCategories->save($productSubCategory)) {
                $this->Flash->success(__('The product sub category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product sub category could not be saved. Please, try again.'));
        }
        $productCategories=$this->ProductSubCategories->ProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('productSubCategory', 'productCategories'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Product Sub Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productSubCategory = $this->ProductSubCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productSubCategory = $this->ProductSubCategories->patchEntity($productSubCategory, $this->request->getData());
            if ($this->ProductSubCategories->save($productSubCategory)) {
                $this->Flash->success(__('The product sub category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product sub category could not be saved. Please, try again.'));
        }
        $productCategories=$this->ProductSubCategories->ProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('productSubCategory', 'productCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Sub Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productSubCategory = $this->ProductSubCategories->get($id);
        if ($this->ProductSubCategories->delete($productSubCategory)) {
            $this->Flash->success(__('The product sub category has been deleted.'));
        } else {
            $this->Flash->error(__('The product sub category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

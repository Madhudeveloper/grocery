<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * ProductVariants Controller
 *
 *
 * @method \App\Model\Entity\ProductVariant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductVariantsController extends AppController
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
        $productVariants = $this->paginate($this->ProductVariants);

        $this->set(compact('productVariants'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Variant id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productVariant = $this->ProductVariants->get($id, [
            'contain' => [],
        ]);

        $this->set('productVariant', $productVariant);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Products');
        $this->loadModel('uoms');

        $productVariant = $this->ProductVariants->newEntity();

        // pr($this->request->getData()); die;
                if ($this->request->is('post')) {
                    $productVariant->variant = $this->request->getData('variant');  
                    // $productVariant = $this->ProductVariants->patchEntity($productVariant, $this->request->getData());
                    if ($this->ProductVariants->save($productVariant)) {
                        $this->Flash->success(__('The product variant has been saved.'));
        
                        return $this->redirect(['action' => 'index']);
                    }
                    $this->Flash->error(__('The product variant could not be saved. Please, t)ry again.'));
        }
        $products = $this->Products->find('list',[]);
        $uoms = $this->uoms->find('list',[]);

        $this->set(compact('productVariant', 'products', 'uoms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Variant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('Products');
        $this->loadModel('uoms');

        $productVariant = $this->ProductVariants->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productVariant = $this->ProductVariants->patchEntity($productVariant, $this->request->getData());
            if ($this->ProductVariants->save($productVariant)) {
                $this->Flash->success(__('The product variant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product variant could not be saved. Please, try again.'));
        }
        $products = $this->Products->find('list',[]);
        $uoms = $this->uoms->find('list',[]);

        $this->set(compact('productVariant', 'products', 'uoms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Variant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productVariant = $this->ProductVariants->get($id);
        if ($this->ProductVariants->delete($productVariant)) {
            $this->Flash->success(__('The product variant has been deleted.'));
        } else {
            $this->Flash->error(__('The product variant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

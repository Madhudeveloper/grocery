<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Orders Controller
 *
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
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

        $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']
        ];


        $conditions[] = ['Orders.order_type' =>1, 'Orders.status' => 1];

        $paginateArray['conditions'] = $conditions;

        $this->paginate = $paginateArray;

        $orders = $this->paginate($this->Orders);

        // pr($orders); die;

        $this->set(compact('orders'));
    }

    /** Shipped Order Method **/

    public function shippedOrders()
    {
        $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']            
        ];

        $conditions[] = ['Orders.order_type' =>1, 'Orders.status' => 1];

        $paginateArray['conditions'] = $conditions;

        $this->paginate = $paginateArray;

        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));

    }

    /** Abandoned Checkouts **/

    public function abandonedCheckouts()
    {
        $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']
        ];
        
        $conditions[] = ['Orders.order_type' =>1, 'Orders.status' => 1];

        $paginateArray['conditions'] = $conditions;

        $this->paginate = $paginateArray;

        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));

    }

    /** Cancelled Orders **/

    public function cancelledOrders()
    {
        $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']
        ];
        
        $conditions[] = ['Orders.order_type' =>1, 'Orders.status' => 3];

        $paginateArray['conditions'] = $conditions;

        $this->paginate = $paginateArray;

        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));

    }

    /** getHistory **/

    public function getHistory()
    {

        $getHistory = $this->Orders->find('all',[
          'contain' => ['OrderStatus'],
          'conditions' => ['Orders.id' => $this->request->getData()['order_id']]
        ])->first();


        $html = "<tr><td>Order has been placed on </td><td>".date( 'd/m/Y H:i:s' , strtotime($getHistory['created'])+(60*330))."</td></tr>";

        foreach ($getHistory['order_status'] as $key => $history) {
            
            $html .= "<tr><td>".$history['status']." on </td><td>".date( 'd/m/Y H:i:s' , strtotime($history['created'])+(60*330))."</td></tr>"; 

        }
        
        echo json_encode(['html' => $html]);

        exit;
    }

    /** Confirmed Orders **/

    public function confirmedOrders()
    {
        $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']
        ];


        $conditions[] = ['Orders.order_type' =>1, 'Orders.status' => 1];

        $paginateArray['conditions'] = $conditions;

        $this->paginate = $paginateArray;
       
       $orders = $this->paginate($this->Orders);

       $this->set(compact('orders'));
    }

    /** Delivered Orders **/

    public function deliveredOrders()
    {
        $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']
        ];


        $conditions[] = ['Orders.order_type' =>1, 'Orders.status' => 2];

        $paginateArray['conditions'] = $conditions;

        // pr($paginateArray); die;

        $this->paginate = $paginateArray;
   
       $orders = $this->paginate($this->Orders);

       $this->set(compact('orders'));
    }
 
    
    /**Change Status **/

    public function changeStatus()
    {
       $this->loadModel('OrderStatus');

        $status = [1 => 'Ordered' , 2 => 'Delivered' , 3 => 'In Transit'];
        
        $order = $this->Orders->get($this->request->getData()['order_id'],[
            'contain' => ['OrderInvoices']
        ]);

        $order->invoice_status = $this->request->getData()['status'];

        $this->Orders->save($order);

        $order_status = $this->OrderStatus->newEntity();

        $order_status->order_id = $this->request->getData()['order_id'];
        $order_status->status = $status[$this->request->getData()['status']];

        $this->OrderStatus->save($order_status);

       // $this->set(compact('orders'));      
    }

    /** Money Returned Orders **/

    public function moneyReturnedOrders()
    {
         $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']            
        ];

        $conditions[] = ['Orders.order_type' => 1 , 'Orders.status' => 3];

        $paginateArray['conditions'] = $conditions;

        // pr($paginateArray); die;

        $this->paginate = $paginateArray;

        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders')); 
    }

    /** Returned Orders **/

    public function returnedOrders()
    {
        $paginateArray = [
            'order' => ['Orders.created' => 'DESC'],
            'contain' => ['OrderProducts' => ['Products'] ,'OrderInvoices']            
        ];

        $conditions[] = ['Orders.order_type' => 1 , 'Orders.status' => 3];

        $paginateArray['conditions'] = $conditions;

        // pr($paginateArray); die;

        $this->paginate = $paginateArray;

        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders')); 
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $order = $this->Orders->get($id, [
            'contain' => ['OrderInvoices',  'OrderProducts' => ['Products', 'productVariants']],
        ]);

        // pr($order); die;

        $this->set('order', $order);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

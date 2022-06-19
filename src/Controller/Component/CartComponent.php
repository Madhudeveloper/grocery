<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class CartComponent extends Component
{
    public function initialize(array $config) 
    {
        parent::initialize($config);
    }

    public function get_whole_cart()
    {   
        $cartItems = $this->request->getSession()->read('Cart');
        if(!empty($cartItems)) {
            return $cartItems;
        }
    }

    /** Add Product  **/

    public function add_product($data)
    {   
        
        $cartItems = $this->request->getSession()->read('Cart.Products');
        // pr( $cartItems); die;
         
        if(empty($cartItems)) {
           $arrStore = array($data['product_id']."_".$data['variant_name'] => $data);
           $this->request->getSession()->write('Cart.Products', $arrStore);
        }else{
            if (array_key_exists($data['product_id']."_".$data['variant_name'], $cartItems)) {
                
                unset($cartItems[$data['product_id']."_".$data['variant_name']]);
                $cartItems[$data['product_id']."_".$data['variant_name']] = $data;
                
                $this->request->getSession()->write('Cart.Products', $cartItems);
            } else { 
                $cartItems[$data['product_id']."_".$data['variant_name']] = $data;
                
                $this->request->getSession()->write('Cart.Products', $cartItems);
            }
        }
    }

    public function count_items()
    {
        $cartItems = $this->request->getSession()->read('Cart');
        if(!empty($cartItems['Products'])) {
            return count($cartItems['Products']);
        }else{
            return 0;
        }
    }


    public function remove_item($data)
    {  
        $cartItems = $this->request->getSession()->read('Cart');
        if(!empty($cartItems)) {
            unset($cartItems['Products'][$data['product_id']]);
            $this->request->getSession()->write('Cart', $cartItems);
        }
        return true;
    }

}    
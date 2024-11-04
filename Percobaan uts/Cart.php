<?php

class Cart extends CI_Model {
    public function add_to_cart($product_id, $quantity) {
      
    }

    public function get_cart_items() {

    }
}


class Transactions extends CI_Controller {
    public function checkout() {

        $cart_items = $this->Cart->get_cart_items();

    }
}
?>
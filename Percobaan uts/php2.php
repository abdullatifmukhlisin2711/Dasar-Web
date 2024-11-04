<?php
public function create() {
    $this->form_validation->set_rules('product_id', 'Product ID', 'required|numeric');
    $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('transaction_form');
    } else {

    }
}
?>

<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Ketentuan extends CI_Controller {

    public function index()
        
    {  
        
        $this->load->view('templates_customer/header');
        $this->load->view('Customer/Ketentuan');
        $this->load->view('templates_customer/footer');

    }

}

?>
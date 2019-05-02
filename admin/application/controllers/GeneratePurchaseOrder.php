<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneratePurchaseOrder extends CI_Controller {

	function __construct() {
		parent::__construct();
		//$this->load->model('Dashboard_model');
    }

    function index() {  
                  
            $this->load->view('comman/header');
            $this->load->view('generate_purchaseorder');
            $this->load->view('comman/footer');
        }       
   
}

?>
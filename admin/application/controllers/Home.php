<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

        function _construct()
        {
        parent::_construct();
        $this->load->model('Login_m');
        }
        function index()
	{      
        $this->load->view('login');      
        }    
         function login_check() {

                $this->load->model('Login_m');
                echo ($this->Login_m->login())? 1: -1;
              //  echo($this->Login_m->login()? 1: -1;);
             
             // $stations=$this->Login_m->login()? 1: -1;
              //  echo "<pre>"; 
             //   print_r($stations);exit;
             
        }
}
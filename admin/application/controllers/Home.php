<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function _construct()
{
        parent::_construct();
        $this->load->model('Home_m');
}

        function index()
	{      
        $this->load->view('login');      
        }    

       
}
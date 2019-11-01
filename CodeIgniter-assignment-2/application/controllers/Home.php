<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends MY_Controller{

        public function index(){ 
            
            $data['view'] = "layout";
            $this->load->view('template/layout',$data);
        }
    
    }
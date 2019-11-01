<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Blogs extends MY_Controller{
        public function index(){
                
            $this->load->view('template/pages/Blogs');
        }
    }
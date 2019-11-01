<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Our_services extends MY_Controller{
        public function index(){
            $data['title'] = "Our Sevices";
            $this->load->view('template/pages/Our_services',$data);
        }
    }
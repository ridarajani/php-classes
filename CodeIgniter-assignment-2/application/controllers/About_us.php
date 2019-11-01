<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class About_us extends MY_Controller{
        public function index(){
            $data['title'] = "About_us";
            $this->load->view('template/pages/About_us');
        }
    }
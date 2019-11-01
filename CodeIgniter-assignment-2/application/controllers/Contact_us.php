<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Contact_us extends MY_Controller{
        public function index(){

            $this->load->view('template/pages/Contact_us');
        }
    }
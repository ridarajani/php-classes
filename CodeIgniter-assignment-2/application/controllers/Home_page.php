<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home_page extends MY_Controller{
        public function index(){

            $this->load->view('template/pages/Home_page');
        }
    }
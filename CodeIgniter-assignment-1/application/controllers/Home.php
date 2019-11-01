<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends My_Controller{
    function index(){
        $this->load->helper('url');
        $this->load->view('include_files/Header');
        $this->load->view('include_files/Navbar');
        $this->load->view('include_files/Footer');
    }
}  
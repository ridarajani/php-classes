<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_page extends My_Controller{
    function index(){
        
        $this->load->view('pages/Home_page');
    }
}  
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contactus extends My_Controller{
    function index(){
        $this->load->view('pages/Contactus');
    }
}  
?>
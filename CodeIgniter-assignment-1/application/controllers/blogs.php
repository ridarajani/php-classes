<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blogs extends My_Controller{
    function index(){
        $this->load->view('pages/Blogs');
    }
}  
?>
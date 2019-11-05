<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller{
    public function index(){
		$this->load->model('User');
		$this->User->table = 'users';
		$select_data = $this->User->select();
		var_dump($select_data);
	}

    public function insert(){
		$this->load->model('User');
		$this->User->table = 'users';
		$array = [
			'firstname' => 	'saman',
			'lastname' 	=> 	'aliza',
			'age' 		=> 	'54',
			'email' 	=> 	'saman@gmail.com',
			'password' 	=> 	'852852852'
		]; 
		$select_data = $this->User->insert_value($array);
	}

    public function update(){
		$this->load->model('User');
		$this->User->table = 'users';
		$array = [
			'firstname' => 	'sehar',
			'lastname' 	=> 	'haris',
			'age' 		=> 	'22',
			'email' 	=> 	'haris@gmail.com',
			'password' 	=> 	'74512874'
		]; 
		$select_data = $this->User->update_value($array,85);

	}
    public function delete(){
		$this->load->model('User');
		$this->User->table = 'users';
		$select_data = $this->User->delete_value(118);
	}
}
?>
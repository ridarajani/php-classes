<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends MY_Controller{
	
	public function index(){
		$this->load->model('Product');
		$this->Product->table = 'products';
		$select_data = $this->Product->select();
		var_dump($select_data);
	}

    public function insert(){
		$this->load->model('Product');
		$this->Product->table = 'products';
		$array = [
			'product_name'	=> 		'bike',
			'color' 		=> 		'black',
			'price' 		=> 		'50000'
		]; 
		$select_data = $this->Product->insert_value($array);
		}

    public function update(){
		$this->load->model('Product');
		$this->Product->table = 'products';
		$array = [
			'product_name'	=> 		'Cycle',
			'color' 		=> 		'white',
			'price' 		=> 		'11000'
		]; 
		$select_data = $this->Product->update_value($array,3);

	}

    public function delete(){
		$this->load->model('Product');
		$this->Product->table = 'products';
		$select_data = $this->Product->delete_value(2);
	}
}
?>
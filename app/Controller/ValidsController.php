<?php
class ValidsController extends AppController {
	public $name = "Valids";
	public $helpers = array('Html' , 'Form');
	public $components = array('Session');
	
	// Thiet lap 1 tap luat cho field
	public function demo01() {
		// Kich hoat chuc nang validation
		$this->Valid->set($this->data);
		
		if ( isset($_POST['_method']) && $_POST['_method'] == 'POST') {
			if($this->Valid->valid01() == true) {
				$this->Flash->set("Data is avaliable");
			} else {
				$this->Flash->set("Data is not avaliable");
			}
		}
		return;
	}
	
	public function demo02() {
		if(isset($_POST['submit'])) {
			$validate = array();
			$validate['title'] = $_POST['title'];
			$validate['info'] = $_POST['info'];
			
			$this->Valid->set($validate);
			
			$error = "";
			$error_tmp = array();
			if ($this->Valid->valid01() == true) {
				$error = "Data is avaliable";
			} else {
				
				if ($validate['title'] == "") {
					$error_tmp['title'] = "Please enter title!";
				} else {
					$error_tmp['title'] = "";
				}
				
				if ($validate['info'] == "") {
					$error_tmp['info'] = "Please enter info!";
				} else {
					$error_tmp['info'] = "";
				}
				
				$error = "Data is not avaliable";
			}
			
			$this->set("msg" , $error);
			$this->set('error' , $error_tmp);
			$this->set("validate" , $validate);
		}
	}
}
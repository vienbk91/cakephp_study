<?php
class UsersController extends AppController {
	public $name = "Users";
	
	public function index() {
		// index content
		$data = $this->User->find('all');
		
		$this->set("info" , $data);
	}
}
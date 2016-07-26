<?php
class BooksController extends AppController {
	// Khai bao ten cua controller
	public $name = "Books";
	// Su dung helper Paginator de thuc hien phan trang
	public $helper = array('Paginator' , 'Html');
	public $components = array('Session');
	// Namespace
	public $paginate = array();
	
	public function exam01(){
		$data = $this->Book->find("all");
		
		$this->set("data",$data);
	}
	
	public function paging() {
		
		$this->paginate = array(
				'limit' => 6 ,
				'order' => array(
						'id' => 'asc' ,
				) ,
		);
		
		$data = $this->paginate("Book");
		$this->set("data" , $data);
	}
	
	public function exam02() {
		$conditions = array(
				'conditions' => array(
						'title LIKE' => "%PHP%" ,
						'id !=' => 4 ,
				) ,
				'limit' => 5 ,
				'order' => array(
						'id DESC'
				) ,
		);
		$data = $this->Book->find('all' , $conditions);
		$this->set("data" , $data);
		$this->render("exam01");
	}
	
	public function exam03() {
		$data = $this->Book->find('all' , array(
				'conditions' => array(
						'description LIKE' => '%abc%'
				),
		));
		
		$this->set("data" , $data);
		$this->render("exam01");
	}
	
	public function exam04() {
		$sql = "SELECT * FROM books WHERE description LIKE '%abc%' ";
		
		$data = $this->Book->query($sql);
		
		var_dump($data);
		
		$this->set("data" , $data);
	}
	
	public function exam05() {
		$result = $this->Book->getData01();
		
		$this->set("data" , $result);
		$this->render("exam04");
	}
	
	public function exam06() {
		$result = $this->Book->getData02();
		
		$this->set("data" , $result);
		$this->render("exam01");
	}
}
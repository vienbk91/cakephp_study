<?php
class Book extends AppModel{
	public $name = "Book"; // tên cua Model Book

	public function getData01() {
		$sql = "select * from books where description like '%abc%'";
		$result = $this->query($sql);
		
		return $result;
	}
	
	public function getData02() {
		return $this->find('all' , array(
				'conditions' => array(
						'description LIKE' => '%abc%' ,
				) ,
		));
	}
}
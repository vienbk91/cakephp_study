<?php
class Valid extends AppModel {
	// Dinh nghia khong su dung table valid, dong nghia la ta se ko su dung database
	public $useTable = false;
	// namespace mac dinh khi su dung data validation
	public $validate = array();
	
	public function valid01() {
		$this->validate = array(
				'title' => array(
						'rule' => 'notBlank' ,
						'message' => 'Please enter title!' ,
				) ,
				'info' => array(
						'rule' => 'notBlank' ,
						'message' => 'Please enter info!' ,
				) ,
		);
		
		if ($this->validates($this->validate)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function setValidate($validate) {
		$this->validate = $validate;
	}
	
	public function getValidate() {
		return $this->validate;
	}
} 
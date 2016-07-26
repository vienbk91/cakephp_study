<?php
class HomesController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('User');
	}

	public function home() {
	}
}
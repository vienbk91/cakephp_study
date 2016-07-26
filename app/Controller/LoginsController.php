<?php
class LoginsController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->loadModel('User');
	}

	public function index() {
		// Goi toi file index.ctp tuong ung trong View/Logins/
		// Tuy nhien ta co the gan no goi toi 1 file view ma ta da dinh nghia
		
		$title = "CakePHP Test Login";
		$data = $this->User->find('all');
		$this->set("data" , $data);
		$this->set("title" , $title);
		$this->set("temp" , "Chu Quang Vien");
		$this->render("index");
	}
	
	public function login() {

		$title = "CakePHP Test Login";
		
		$this->set("title" , $title);
		$this->set("temp" , "Chu Quang Vien");

		if (isset($_POST['login_submit'])) {
			$user_email = !isset($_POST['user_email'])?"":$_POST['user_email'];
			$user_password = !isset($_POST['user_password'])?"":$_POST['user_password'];

			$checkExistUser = $this->User->checkExistUser($user_email , $user_password);
			
			if ($checkExistUser) {
				// render to home
				$this->redirect(array('controller' => 'books' , 'action' => 'paging'));
			} else {
				$this->set("error_msg" , "ログインユーザーメールとパスワードを一統していません。");
				$this->render("login");
			}
		} else {
			$this->render("login");
		}
	}

	public function view($id = null) {
		$info = array(
				"title_page" => "CakePHP demo by qhonline.info",
				"id" => $id,
		);
		$this->set("data",$info);
		$this->render("view");
	}
}
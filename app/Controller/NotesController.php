<?php
App::uses('AppController' , 'Controller');
class NotesController extends AppController {
	public $name = "Notes";
	public $helpers = array('Html' , 'Form');
	public $components = array('Session');

	public function index() {
		$notes = $this->Note->find('all' , array(
				'order' => array('Note.created' => 'asc') ,
				'fields' => array('id' , 'title') ,
		));
		// pr($note); // View with DebugKit
		// exit;
		$this->set('notes' , $notes);
	}
	
	public function view($id = null) {
		$this->Note->id = $id;
		if ($this->Note->exists()) {
			// C1 : Using findById
			$note = $this->Note->findById($id);
			
			// C2: Using find('all') with conditions
			// Khi find all thi ket qua nhan ve luon duoc tra duoi dang 1 mang
			// Neu chi co 1 phan tu thi do la array[0], nen can chu y khi bind sang view
			$note2 = $this->Note->find('all' , array(
					'conditions' => array('id' => $id) ,
					'limit' => 1,
			));
			
			//pr($note);exit;
			$this->set('note' , $note);
		} else {
			throw new NotFoundException('Không tìm thấy ghi chú này');
		}
	}

	public function add() {
		
		if ($this->request->is('post')) { // $this->request->data lay du lieu tu form
			$newNote = $this->request->data;
			if ($this->Note->save($newNote)) {
				$this->Session->setFlash('Ghi chú chưa được lưu lại');

				// $this->Session->setFlash('Ghi chú đã được lưu lại');
				// $this->redirect(array('controller' => 'notes' , 'action' => 'index'));
			} else {
				$this->Flash->set('Ghi chú chưa được lưu lại');
			}
		}
	}

	public function add2() {

	}
}

?>
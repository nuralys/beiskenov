<?php 

class ContactsController extends AppController{

	public $uses = array('Contact', 'Blog' ,'Service');

	public function index(){
		$blog = $this->Blog->find('all');
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		$this->set(compact('blog', 'parent_services'));
	}
}
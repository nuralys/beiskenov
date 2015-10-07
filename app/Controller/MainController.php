<?php

class MainController extends AppController{

	public $uses = array('Main', 'Service');
	public function index(){
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		$this->set(compact('parent_services'));
	}
}
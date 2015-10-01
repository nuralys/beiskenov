<?php

class ServicesController extends AppController{

	public $uses = array('Service', 'Block');

	public function admin_index(){
		$service_tree = $this->Service->find('threaded');
			$services1 = $this->_catMenuHtml($service_tree);
			$test = 'test';
			$this->set(compact('services1', 'test', 'service_tree'));
	}

	public function index($service_alias = null){
		if(is_null($service_alias)){
			throw new NotFoundException("Такой страницы нету");
		}
		$service = $this->Service->findByAlias($service_alias);
		if(!$service){
			throw new NotFoundException("Такой страницы нету");
		}
		$services = $this->Service->find('all');
		$service_id = $service['Service']['id'];
		//Получаем 1 уровень вложенных услуг
		$getChildrenServices = $this->_getChildrenServices($services, $service_id);
		// debug($getChildrenServices);
		$test = $this->getRightBlock($service_id);
		$this->set(compact('services', 'service_alias', 'service', 'service_id', 'getChildrenServices', 'test'));
	}

	protected function _getChildrenServices($services, $service_id){
		$data = array();
		foreach ($services as $item) {
			if($item['Service']['parent_id'] == $service_id){
				$data[$service_id]['Children'][$item['Service']['id']] = $item['Service'];
			}
		}
		return $data;
	}

	public function getRightBlock($service_id){
		$blocks = $this->Block->find('all', array(
			'conditions' => array(
				'service_id' => $service_id
				),
			));
		return $blocks;
	}

	public function getServices(){
			
	}

	protected function _catMenuHtml($service_tree = false){
		if(!$service_tree) return false;
		$html = '';
		foreach ($service_tree as $item) {
			$html .= $this->_catMenuTemplate($item);
		}
		return $html;
	}

	protected function _catMenuTemplate($services1){
		ob_start();
		include APP . "View/Elements/services_tpl.ctp";
		return ob_get_clean();
	}

	public function admin_edit($service_id){
		$service = $this->Service->findById($service_id);
		if(!$service_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Service->id = $service_id;
			if($this->Service->save($this->request->data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $service;
			
			$this->set(compact('service_id', 'service'));
		}

		$this->set(compact('service_id'));

	}
}
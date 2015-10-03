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
		$service_tree = $this->Service->find('threaded');
		$service_id = $service['Service']['id'];
		//Получаем 1 уровень вложенных услуг
		$getChildrenServices = $this->_getChildrenServices($services, $service_id);
		// debug($getChildrenServices);
		$blocks = $this->getRightBlock($service_id);

		$breadcrumbs = $this->_searchParent($services, $service);
		$this->set(compact('services', 'service_alias', 'service', 'service_id', 'breadcrumbs', 'getChildrenServices', 'blocks', 'service_tree'));
	}

	protected function _searchParent($services, $service){
		$data = array();
		foreach ($services as $v) {
			if($v['Service']['id'] == $service['Service']['parent_id']){
				$data['Breadcrumbs']['id'] = $v['Service']['id'];
				$data['Breadcrumbs']['title'] = $v['Service']['title'];
				$data['Breadcrumbs']['alias'] = $v['Service']['alias'];
				$data['Breadcrumbs']['parent_id'] = $v['Service']['parent_id'];
				// $data['test'] = $data[$service['Service']['parent_id']]['Breadcrumbs']['parent_id'];
				// $this->_searchParent($services, $data['test']);
			}
		}
		return $data;
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

	public function admin_add(){
		if($this->request->is('post')){
			$this->Service->create();
			$data = $this->request->data['Service'];
			
			if($this->Service->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			$s_list = $this->Service->find('list');
			$this->set(compact('s_list'));
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
			$s_list = $this->Service->find('list');
			$this->set(compact('service_id', 'service', 's_list'));
		}

		$this->set(compact('service_id'));

	}

	public function admin_delete($service_id){
		$service_id = $service_id;
		$this->set(compact('service_id'));
		// if (!$this->Service->exists($service_id)) {
		// 	throw new NotFounddException('Такой статьи нет');
		// }
		// if($this->Service->delete($service_id)){
		// 	$this->Session->setFlash('Удалено', 'default', array(), 'good');
		// }else{
		// 	$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		// }
		// return $this->redirect($this->referer());
	}
	public function admin_deleteconfirm($service_id){
		if (!$this->Service->exists($service_id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Service->delete($service_id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}

		return $this->redirect('/admin');
	}

	protected function _catsSelect($cats, $category_id, $tab = ''){
		$string = '';
		foreach($cats as $item){
			$string .= $this->_catsSelectTemplate($item, $category_id, $tab);
		}
		return $string;
	}

	protected function _catsSelectTemplate($category, $category_id, $tab){
		ob_start();
		include APP . "View/Elements/cats_select_tpl.ctp";
		return ob_get_clean();
	}

}
<?php 

class BlocksController extends AppController{

	public function index(){

	}
	public function admin_index(){
		$blocks = $this->Block->find('all');
		$this->set(compact('blocks'));
	}
	public function admin_add(){

	}

	public function admin_edit($block_id){
		if(is_null($block_id) || !(int)$block_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		$block = $this->Block->findById($block_id);
		if(!$block_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Block->id = $block_id;
			if($this->Block->save($this->request->data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $block;
			
			$this->set(compact('block_id', 'block'));
		}
	}

	public function admin_delete(){

	}
}
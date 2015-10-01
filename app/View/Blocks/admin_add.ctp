<h1>Добавление блока</h1>
<?php 

echo $this->Form->create('Block', array('type' => 'file'));
echo $this->Form->input('service_id', array('label' => 'Выберите категорию'));
echo $this->Form->input('title');
echo $this->Form->input('img', array('type' => 'file'));
echo $this->Form->end('Создать');

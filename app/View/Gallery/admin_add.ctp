<h1>Добавление</h1>
<?php 
echo $this->Form->create('Gallery', array('type' => 'file'));
echo $this->Form->input('category_id', array('label' => 'Выберите категорию'));
echo $this->Form->input('title', array('label' => 'Название'));
//echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Изображение', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
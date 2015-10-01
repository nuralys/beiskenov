<h1>Редактирование новости/акции</h1>
<?php 

echo $this->Form->create('News', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('date', array('label' => 'Дата'));
?>
<img src="/img/news/thumbs/<?=$data['News']['img']?>">
<?
echo $this->Form->input('img', array('label' => 'Картинка', 'type' => 'file'));
echo $this->Form->end('Редактировать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
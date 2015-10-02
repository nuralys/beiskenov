<h1>Редактирование статьи</h1>
<?php 

echo $this->Form->create('Blog', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('date', array('label' => 'Дата'));
?>
<img src="/img/blog/thumbs/<?=$data['Blog']['img']?>">
<?
echo $this->Form->input('img', array('label' => 'Картинка', 'type' => 'file'));
echo $this->Form->end('Редактировать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
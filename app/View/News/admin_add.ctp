<h1>Добавление новости/акции</h1>
<?php 

echo $this->Form->create('News', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('date', array('label' => 'Дата'));
echo $this->Form->input('img', array('label' => 'Изображение', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
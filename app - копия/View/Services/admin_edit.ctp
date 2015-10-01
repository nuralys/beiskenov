<h3>Редактирование <?php echo $service_id; ?></h3>
<?php 
echo $this->Form->create('Service');
echo $this->Form->input('title');
echo $this->Form->input('body', array('id' => 'editor'));
echo $this->Form->input('price');
echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
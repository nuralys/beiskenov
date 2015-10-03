<h3>Добавление услуги</h3>
<?php 
// debug($s_list);
echo $this->Form->create('Service');
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('alias', array('label' => 'Алиас'));

?>

<div class="input select">
	<label for="ServiceParentId">Услуга</label>
	<select name="data[Service][parent_id]" id="ServiceParentId">
		<option value="0">-</option>
		<?php foreach($s_list as $k => $v):?>
			<option value="<?=$k?>"><?=$v?></option>
		<?php endforeach ?>
	</select>
</div>

<?
// echo $this->Form->input('parent_id', array('label' => 'Услуга'));
echo $this->Form->input('body', array('id' => 'editor', 'label' => 'Текст'));
echo $this->Form->input('price', array('label' => 'Цена от'));
echo $this->Form->input('price_to', array('label' => 'Цена до'));
echo $this->Form->end('Сохранить');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
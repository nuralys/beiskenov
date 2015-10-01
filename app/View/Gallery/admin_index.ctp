<h1><a href="gallery/add">Добавить</a></h1>
<ul>
<?php foreach($data as $item) : ?>
	<li>
		<img src="/img/gallery/<?=$item['Gallery']['img']?>" width="200">
		<?=$item['Gallery']['title']?> ( 
		<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Gallery']['id']), array('confirm' => 'Подтвердите удаление')); ?>)
	</li>
<?php endforeach ?>
</ul>
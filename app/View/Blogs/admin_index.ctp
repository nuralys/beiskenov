<a href="blog/add">Добавить статью</a>
<ul>
<?php foreach($blogs as $item) : ?>
	<li><?=$item['Blog']['title']?> (<a href="blog/edit/<?=$item['Blog']['id']?>">Редактировать</a> | 
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Blog']['id']), array('confirm' => 'Подтвердите удаление')); ?>
	)</li>
<?php endforeach ?>
</ul>
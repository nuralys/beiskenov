<div class="admin">
	<h2>Административная панель сайта</h2>
</div>
<a class="add_b" href="/admin/blocks/add">+ Добавить блок</a>
<h1>Список блоков</h1>

<table class="blocks">
	<tr>
		<th>Изображение</th>
		<th>Название</th>
		<th>Услуги</th>
		<th>Действия</th>

	</tr>
	<tr>
		<?php foreach ($blocks as $key) :?>
		<td><img src="/img/blocks/<?=$key['Block']['img'] ?>" width="100"></td>
		<td><?=$key['Block']['title'] ?></td>
		<td><a href="/services/<?=$key['Service']['alias'] ?>" target="_blank"><?=$key['Service']['title'] ?></a></td>
		<td>
			<a href="blocks/edit/<?=$key['Block']['id'] ?>">Редактировать</a> | 
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $key['Block']['id']), array('confirm' => 'Подтвердите удаление')); ?>
		</td>
	</tr>
<?php endforeach ?>
</table>
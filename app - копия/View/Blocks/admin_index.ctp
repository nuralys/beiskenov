<h1>Список блоков</h1>

<table>
	<tr>
		<th>Изображение</th>
		<th>Название</th>
		<th>Услуги</th>
		<th>Действия</th>

	</tr>
	<tr>
		<?php foreach ($blocks as $key) :?>
		<td>Здесь будет изображение</td>
		<td><?=$key['Block']['title'] ?></td>
		<td><a href="/services/<?=$key['Service']['alias'] ?>" target="_blank"><?=$key['Service']['title'] ?></a></td>
		<td>
			<a href="blocks/edit/<?=$key['Block']['id'] ?>">Редактировать</a> | 
			<a href="blocks/delete/<?=$key['Block']['id'] ?>">Удалить</a>
		</td>
	</tr>
<?php endforeach ?>
</table>
<p><a href="blocks/add">Добавить блок</a></p>
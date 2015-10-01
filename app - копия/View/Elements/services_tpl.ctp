<li>
	<?php echo $services1['Service']['title']; ?> <a href="/admin/service/edit/<?php echo $services1['Service']['id']; ?>"> (Редактировать</a> | Удалить)
	<?php if($services1['children']) : ?>
	<ul>
		<?php echo $this->_catMenuHtml($services1['children']); ?>
	</ul>
	<?php endif; ?>
</li>
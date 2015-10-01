<div class="heading_up cr">
			<h1><?php echo $service['Service']['title'] ?></h1>
			<ul>
				<li>Главная</li>
				<li>Услуги</li>
				<li>Пластика груди</li>
			</ul>
		</div>
<section>
	<div class="cr ov">
		<div class="content">
			<div class="usl_text">
<!-- <img src="/img/service.jpg"/> -->
<?php if(!empty($getChildrenServices[$service_id]['Children'])) : ?>
	<?php foreach ($getChildrenServices[$service_id]['Children'] as $k => $v) : ?>
		<p><a href="/services/<?=$v['alias']?>"><?=$v['title']?></a></p>
	<?php endforeach ?>
<?php endif ?>

 <p><?=$service['Service']['body']?></p>
 <div class="price_bot">
							<span>Цена:</span>
							<span>от <?=$service['Service']['price']?> тг.</span>
							<?php debug($test); ?>
						</div>
<a class="callback" href="#">Записаться на прием</a>
			</div>
		</div>
		<aside class="u_aside">
					<div class="bf_part">
						<p>Эндоскопическое увеличение груди(подмышечный доступ)</p>
						<a href="#">
							<div class="img_bef">
								<img src="/img/bef.jpg"/>
							</div>
						</a>
						<a href="#">
							<div class="img_af">
							<img src="/img/aft.jpg"/>
							</div>
						</a>
					</div>
					<div class="bf_part">
						<p>Эндоскопическое увеличение груди(подмышечный доступ)</p>
						<a href="#">
							<div class="img_bef">
								<img src="/img/bef.jpg"/>
							</div>
						</a>
						<a href="#">
							<div class="img_af">
							<img src="/img/aft.jpg"/>
							</div>
						</a>
					</div>
				</aside>
	</div>
</section>
<div class="heading_up cr">
			<h1><?php echo $service['Service']['title'] ?></h1>
			<?php //debug($breadcrumbs); ?>
			
			<?php //debug($service); ?>
<?php //echo $service_id; ?>
			<?php //debug($services); ?>
			<ul>
				<li><a href="/">Главная</a></li>
				<?php if($breadcrumbs): ?>
				<li><a href="/services/<?=$breadcrumbs['Breadcrumbs']['alias']?>"><?=$breadcrumbs['Breadcrumbs']['title']?></a></li>
			<?php endif ?>
				<li><?=$service['Service']['title'] ?></li>
			</ul>
		</div>
<section>
	<div class="cr ov">
		<div class="content">
		<ul class="serv_ul">
			<?php if(!empty($getChildrenServices[$service_id]['Children'])) : ?>
				<?php foreach ($getChildrenServices[$service_id]['Children'] as $k => $v) : ?>
					<li class="active"><a href="/services/<?=$v['alias']?>"><?=$v['title']?></a></li>
				<?php endforeach ?>
			<?php endif ?>
		</ul>
			<div class="usl_text">
<!-- <img src="/img/service.jpg"/> -->

 <p><?=$service['Service']['body']?></p>
 <div class="price_bot">
							<?php if($service['Service']['price']): ?>
							<span>Цена:</span>
							<span>от <?=$service['Service']['price']?> тг.
							<?php endif ?> 
							<?php if($service['Service']['price_to']): ?>
								- до <?=$service['Service']['price_to']?> тг.</span>
							<?php endif ?>
							<?php //debug($blocks); ?>
						</div>
<a class="callback fancybox" href="#inline2" rel="group">Записаться на прием</a>
						<div id="inline2" style="display:none;">
							<div class="modal_div">
								<span class="title_z">Записаться на прием</span>
								<form>
									<input type="text" class="modal_f" placeholder="Имя...">
									<div class="help-block">Необходимо заполнить «Имя».</div>
									<input type="text" class="modal_f" placeholder="Почта...">
									<div class="help-block">Необходимо заполнить «Почту».</div>
									<button type="submit" name="submit1">Записаться</button>
								</form>
							</div>
						</div>
			</div>
		</div>
		<aside class="u_aside">
			<?php foreach($blocks as $block) : ?>
					<div class="bf_part">
						<p><?=$block['Block']['title']?></p>
						<a href="#">
							<div class="img_af">
								<a class="fancybox" href="../img/blocks/<?=$block['Block']['img']?>">
									<img src="/img/blocks/<?=$block['Block']['img']?>"/>
								</a>
							</div>
						</a>
					</div>
			<?php endforeach; ?>
				</aside>
	</div>
</section>
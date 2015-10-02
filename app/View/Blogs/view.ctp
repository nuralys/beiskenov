<div class="heading_up cr">
			<h1>ПОЛЕЗНАЯ ИНФОРМАЦИЯ</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/blog">Полезная информация</a></li>
				<li><?=$post['Blog']['title']?></li>
			</ul>
		</div>
		<section>
			<div class="cr ov">
				<div class="content">
					<div class="about_txt">
						<img src="/img/blog/<?=$post['Blog']['img']?>"/>
						<h6><?=$post['Blog']['title']?></h6>
						<div class="date">
							<span><?php echo $this->Time->format($post['Blog']['date'], '%d-%m-%Y', 'invalid'); ?></span>
						</div>
						<?=$post['Blog']['body']?>
					</div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Ползеные информации</span>
						<ul class="c_ul">
							<?php foreach($blog as $item):?>
							<?php if($item['Blog']['id'] != $post['Blog']['id'] ): ?>
							<li><a href="/blog/<?=$item['Blog']['id']?>"><?=$item['Blog']['title']?></a></li>
						<?php endif ?>
						<?php endforeach ?>
						</ul>
					</div>
				</aside>
			</div>
		</section>
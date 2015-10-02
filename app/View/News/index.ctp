<div class="heading_up cr">
			<h1>НОВОСТИ И АКЦИИ</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Новости/Акции 22</li>
			</ul>
		</div>
		<section>
			<div class="cr ov">
				<div class="content">
						<div class="blog_ul">
							<ul>
							<?php foreach($news as $item) : ?>
								<li>
									<div class="b_item">
										<img src="img/news/thumbs/<?=$item['News']['img'] ?>"/>
										<a href="/news/<?=$item['News']['id'] ?>"><?=$item['News']['title'] ?></a>
										<span class="date">
										<?php echo $this->Time->format($item['News']['date'], '%d-%m-%Y', 'invalid'); ?>
										</span>
									</div>
								</li>
							<?php endforeach ?>
							</ul>
						</div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Ползеные информации</span>
						<ul class="c_ul">
							<?php foreach($blog as $blog_item):?>
							<li><a href="/blog/<?=$blog_item['Blog']['id']?>"><?=$blog_item['Blog']['title']?></a></li>
						<?php endforeach?>
						</ul>
					</div>
				</aside>
			</div>
		</section>
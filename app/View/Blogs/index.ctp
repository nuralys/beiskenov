<div class="heading_up cr">
			<h1>ПОЛЕЗНАЯ ИНФОРМАЦИЯ</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Полезная информация</li>
			</ul>
		</div>
		<section>
			<div class="cr ov">
				<div class="content">
						<div class="blog_ul">
							<ul>
							<?php foreach($blogs as $item) : ?>
								<li>
									<div class="b_item">
										<img src="img/blog/thumbs/<?=$item['Blog']['img'] ?>"/>
										<a href="/blog/<?=$item['Blog']['id'] ?>"><?=$item['Blog']['title'] ?></a>
										<span class="date">
											<?php echo $this->Time->format($item['Blog']['date'], '%d-%m-%Y', 'invalid'); ?>
										</span>
									</div>
								</li>
							<?php endforeach ?>
							</ul>
						</div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Новости и акции</span>
						<ul class="c_ul">
							<li><a href="#">Эндоскопическая подтяжка лица. </a></li>
							<li><a href="#">Эндоскопический лифтинг</a></li>
							<li><a href="#">Подтяжка лица</a></li>
							<li><a href="#">Блефаропластика – пластика век</a></li>
							<li><a href="#">Увеличение груди</a></li>
							<li><a href="#">Подтяжка груди</a></li>
							<li><a href="#">Уменьшение груди</a></li>
							<li><a href="#">Эндоскопическая подтяжка лица. Эндоскопический лифтинг.</a></li>
							<li><a href="#">Подтяжка лица</a></li>
							<li><a href="#">Увеличение груди</a></li>
							<li><a href="#">Эндоскопическая подтяжка лица. Эндоскопический лифтинг.</a></li>
						</ul>
					</div>
				</aside>
			</div>
		</section>
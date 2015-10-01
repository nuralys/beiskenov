<div class="heading_up cr">
			<h1>Новости и акции</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/news">Новости/Акции</a></li>
				<li><?=$post['News']['title']?></li>
			</ul>
		</div>
		<section>
			<div class="cr ov">
				<div class="content">
					<div class="about_txt">
						<img src="/img/news/<?=$post['News']['img']?>"/>
						<h6><?=$post['News']['title']?></h6>
						<div class="date">
							<span><?php echo $this->Time->format($post['News']['date'], '%d-%m-%Y', 'invalid'); ?></span>
						</div>
						<?=$post['News']['body']?>
					</div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Ползеные информации</span>
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
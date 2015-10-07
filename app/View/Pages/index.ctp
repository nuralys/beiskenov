<div class="heading_up cr">
			<h1>О ХИРУРГЕ</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>О хирурге</li>
			</ul>
		</div>
		<section>
			<div class="cr ov">
				<div class="content">
					<div class="about_txt">
						<img src="/img/surger.jpg"/>
						<h6><?=$page['Page']['fio']?></h6>
						<span class="authd"><?=$page['Page']['profession']?></span>
						<?=$page['Page']['body']?>
					</div>
					
					<a class="callback" href="#">Записаться на прием</a>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Ползеная информация</span>
						<ul class="c_ul">
							<?php foreach($blog as $blog_item):?>
							<li><a href="/blog/<?=$blog_item['Blog']['id']?>"><?=$blog_item['Blog']['title']?></a></li>
						<?php endforeach?>
						</ul>
					</div>
				</aside>
			</div>
		</section>
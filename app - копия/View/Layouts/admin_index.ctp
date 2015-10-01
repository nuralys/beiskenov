<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Административная панель. Beiskenov</title>
		<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		echo $this->Html->css(array('normalize', 'style', 'admin'));
		echo $this->Html->script('jquery-1.9.0.min');
		echo $this->Html->script('ckeditor/ckeditor.js');
		?>
		<meta name="viewport" content="width=1100">
	</head>
	<body>
		<div class="main">
		<header>
			<div class="top">
				<div class="cr">
					<ul class="social">
						<li><a class="inst" href="#" target="_blank"></a></li>
						<li><a class="vk" href="#" target="_blank"></a></li>
						<li><a class="fb" href="#" target="_blank"></a></li>
					</ul>
					<p class="fl_r">Адрес: г. Астана, ул. Куйши Дина 46</p>
				</div>
			</div>
			<div class="header">
				<div class="cr">
					<img alt="" title="" src="/img/logo.jpg"/>
					<ul>
						<li class="active">
							<a href="#">
								Главная
							</a>
						</li>
						<li>
							<a href="#">
								Услуги
							</a>
						</li>
						<li>
							<a href="#">
								О хирурге
							</a>
						</li>
						<li>
							<a href="#">
								Полезная информация
							</a>
						</li>
						<li>
							<a href="#">
								Галерея
							</a>
						</li>
						<li>
							<a href="#">
								Новости/Акции
							</a>
						</li>
						<li>
							<a href="#">
								Контакты
							</a>
						</li>
					</ul>
					<div class="right_num">
						<div class="show_p">						
							<button>Показать номер</button>
							<span class="tel">(7172) 31-66-07</span>
							<span>+7</span>		
						</div>
						<a class="callback" href="#">Заказать звонок</a>
					</div>
				</div>
			</div>
		</header>
		
		<section>
			<div class="cr ov">
				<div class="content">
					<div class="about_txt">
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->Session->flash('good'); ?>
					<?php echo $this->Session->flash('bad'); ?>
					<?php echo $this->fetch('content'); ?>
					</div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Страницы</span>
						<ul class="c_ul">
							<li><a href="/admin/services">Услуги</a></li>
							<li><a href="#">Полезная информация</a></li>
							<li><a href="#">Галерея</a></li>
							<li><a href="#">Новости/Акции</a></li>
							<li><a href="/admin/blocks">Блоки</a></li>
						</ul>
					</div>
				</aside>
			</div>
		</section>
		<footer>
			<div class="cr">
				<img src="/img/logo.jpg"/>
				<div class="f_row f_first">
					<span>Адрес: г. Астана, ул. Куйши Дина 46</span>
					<span>Почта: info@beiskenov.com</span>
					<span>Телефон: +7 (7172) 78 38 02, 8 778 999 87 41</span>
				</div>
				<div class="f_row f_second">
					<ul>
						<li>
							<a href="#" class="fl_l">Главная</a>
							<a href="#" class="fl_r">Полезная информация</a>
						</li>
						<li>
							<a href="#" class="fl_l">Услуги</a>
							<a href="#" class="fl_r">Галерея</a>
						</li>
						<li>
							<a href="#" class="fl_l">О хирурге</a>
							<a href="#" class="fl_r">Новости/Акции</a>
						</li>						
					</ul>
					
				</div>
				<div class="f_row f_third">
					<span>© 2015, BEYSKENOV.COM</span>
					<span>Все права защищены.</span>
					<span>Сайт разработан в <a target="_blank" href="http://astanacreative.kz">AstanaCreative.kz</a></span>					
				</div>
			</div>
		</footer>
		</div>
		
	</body>
</html>
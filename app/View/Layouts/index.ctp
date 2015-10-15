<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Beiskenov.loc</title>
		 <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
		<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		?>
		<meta name="viewport" content="width=1100">
		
		<?php
		echo $this->fetch('script');

		echo $this->Html->css(array('normalize', 'style', 'source/jquery.fancybox.css', 'source/jquery.fancybox-buttons.css', 'source/jquery.fancybox-thumbs.css,')); 
		echo $this->Html->script(array('jquery-1.9.0.min', 'lib/jquery-1.10.1.min.js', 'lib/jquery.mousewheel-3.0.6.pack.js', 'source/jquery.fancybox.js', 'source/helpers/jquery.fancybox-buttons.js?v=1.0.5', 'source/helpers/jquery.fancybox-thumbs.js?v=1.0.7', 'source/helpers/jquery.fancybox-media.js?v=1.0.6'));
		?>
		<script type="text/javascript" src = "js/jquery.easing-1.3.js"></script>
		
		<!-- iosSlider plugin -->
		<script src = "js/jquery.iosslider.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});
		});
	</script>
	<script type="text/javascript">
			$(document).ready(function() {
			
				$('.iosSlider').iosSlider({
					autoSlide:true,
					scrollbar: true,
					snapToChildren: true,
					desktopClickDrag: true,
					scrollbarLocation: 'top',
					scrollbarMargin: '10px 10px 0 10px',
					scrollbarBorderRadius: '0',
					responsiveSlideWidth: true,
					navSlideSelector: $('.iosSliderButtons .button'),
					infiniteSlider: true,
					startAtSlide: '1',
					onSlideChange: slideContentChange,
					onSlideComplete: slideContentComplete,
					onSliderLoaded: slideContentLoaded
				});
				
				function slideContentChange(args) {
					
					/* indicator */
					$(args.sliderObject).parent().find('.iosSliderButtons .button').removeClass('selected');
					$(args.sliderObject).parent().find('.iosSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
					
				}
				
				function slideContentComplete(args) {
					
					if(!args.slideChanged) return false;
					
					/* animation */
					$(args.sliderObject).find('.text1, .text2').attr('style', '');
					
					$(args.currentSlideObject).children('.text1').animate({
						right: '50%',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					$(args.currentSlideObject).children('.text2').delay(200).animate({
						right: '50%',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
				}
				
				function slideContentLoaded(args) {
					
					/* animation */
					$(args.sliderObject).find('.text1, .text2').attr('style', '');
					
					$(args.currentSlideObject).children('.text1').animate({
						right: '50%',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					$(args.currentSlideObject).children('.text2').delay(200).animate({
						right: '50%',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					/* indicator */
					$(args.sliderObject).parent().find('.iosSliderButtons .button').removeClass('selected');
					$(args.sliderObject).parent().find('.iosSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
					
				}
				
			});
		</script>
		
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
					<a href="/">
						<img alt="" title="" src="/img/logo.jpg"/>
					</a>
					<ul class="nav">
						<li class="active">
							<a href="/">
								<?php echo __('Главная'); ?>
							</a>
						</li>
						<li class="sub">
							<a href="">
								<?php echo __('Услуги'); ?>
							</a>
							<div class="sub_p">
								<div class="frame">
									<?php foreach($parent_services as $service): ?>
									<a href="/services/<?=$service['Service']['alias'];?>"><?=$service['Service']['title'];?></a>
									<?php endforeach ?>
								</div>
							</div>
						</li>
						<li class="sub">
							<a href="/page/about">
								<?php echo __('О хирурге'); ?>
							</a>
							
						</li>
						<li>
							<a href="/blogs">
								<?php echo __('Полезная информация'); ?>
							</a>
						</li>
						<li>
							<a href="/gallery">
								<?php echo __('Галерея'); ?>
							</a>
						</li>
						<li>
							<a href="/news">
								<?php echo __('Новости/Акции'); ?>
							</a>
						</li>
						<li>
							<a href="/contacts">
								<?php echo __('Контакты'); ?>
							</a>
						</li>
					</ul>
					<div class="right_num">
						<div class="show_p">						
							<button>Показать номер</button>
							<span class="tel"> (7172) 26-48-56, 8778 911 00 11</span>
							<span>+7</span>		
						</div>
						<a class="callback fancybox" href="#inline1" rel="group">Заказать звонок</a>
						<div id="inline1" style="display:none;">
							<div class="modal_div">
								<span class="title_z">Обратный звонок</span>
								<form>
									<input type="text" class="modal_f" placeholder="Имя...">
									<div class="help-block">Необходимо заполнить «Имя».</div>
									<input type="text" class="modal_f" placeholder="Номер...">
									<div class="help-block">Необходимо заполнить «Номер».</div>
									<button type="submit" name="submit1">Заказать</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content') ?>
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
		<script>
		$('.show_p button').on('click', function(){
			$('.show_p button').css('display','none');
			$('.show_p .tel').css('display','block');
		})
		</script>
		<script src="../js/separate-js/jquery.lettering-0.6.1.min.js"></script>
		<script src="../js/main.min.js"></script>
	</body>
</html>
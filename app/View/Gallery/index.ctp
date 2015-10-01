<div class="heading_up cr">
			<h1>Галерея</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Галерея</li>
			</ul>
		</div>
		<section>
			<div class="cr ov">
				<div class="content">
					<div class="galery">
						<ul class="random">
							<?php foreach($random as $item):?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item['Gallery']['title'] ?>"><img src="img/gallery/<?=$item['Gallery']['img'] ?>"></a>
								</li>
							<?php endforeach ?>
							
						</ul>
						<div class="tabs">
							<ul class="ul_tab">	
								<li class="active"><span>Пластика лица</span></li>
								<li><span>Мастерская идеальной груди</span></li>
								<li><span>Пластика тела</span></li>
							</ul>
							<div class="gal_tab">
								<div>
									один
									<div class="gal_tab">
							<ul>
							<?php foreach($plastika_litsa as $item_pl) : ?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item_pl['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item_pl['Gallery']['title'] ?>"><img src="img/gallery/<?=$item_pl['Gallery']['img'] ?>"></a>
								</li>
							<?php endforeach ?>
							</ul>
						</div>
								</div>
								<div>
									два
									<div class="gal_tab">
							<ul>
								<?php foreach($grud as $item_gr) : ?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item_gr['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item_gr['Gallery']['title'] ?>"><img src="img/gallery/<?=$item_gr['Gallery']['img'] ?>"></a>
								</li>
							<?php endforeach ?>
																
							</ul>
						</div>
								</div>
								<div>
									три
									<div class="gal_tab">
							<ul>
								<?php foreach($plastika_tela as $item_tl) : ?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item_tl['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item_tl['Gallery']['title'] ?>"><img src="img/gallery/<?=$item_tl['Gallery']['img'] ?>"></a>
								</li>
							<?php endforeach ?>			
							</ul>
						</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<aside class="u_aside">
					<span class="as_h">Видео</span>
					<iframe width="278" height="178" src="https://www.youtube.com/embed/EpJye0HHT78" frameborder="0" allowfullscreen></iframe>
					<p class="video_h">Пающие Трусы - Пластический Хирург </p>
					<iframe width="278" height="178" src="https://www.youtube.com/embed/EpJye0HHT78" frameborder="0" allowfullscreen></iframe>
					<p class="video_h">Пающие Трусы - Пластический Хирург </p>
				</aside>
			</div>
		</section>
				<script>
			$(document).ready(function(){
    $(".tabs").lightTabs();
});
			(function($){				
    jQuery.fn.lightTabs = function(options){
        
        var createTabs = function(){
            tabs = this;
            i = 0;
            
            showPage = function(i){
                $('.gal_tab').children("div").hide();
                $('.gal_tab').children("div").eq(i).show();
                $('.tabs').children("ul").children("li").removeClass("active");
                $('.tabs').children("ul").children("li").eq(i).addClass("active");
            }
            
            showPage(0);				
            
            $(tabs).children("ul").children("li").each(function(index, element){
                $(element).attr("data-page", i);
                i++;                        
            });
            
            $(tabs).children("ul").children("li").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });				
        };		
        return this.each(createTabs);
    };	
})(jQuery);

		</script>
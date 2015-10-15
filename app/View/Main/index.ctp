		<div class = 'iosSlider'>
			<div class = 'slider'>			
				<div class = 'item' id = 'item1'>					
					<div class = 'text1'><span>Бейскенов Ильяс Саматович</span></div>										
					<div class = 'text2'><span>Ведущий пластический хирург</span></div>					
				</div>				
				<div class = 'item' id = 'item2'>				
					<div class = 'text1'><span>Бейскенов Ильяс Саматович</span></div>										
					<div class = 'text2'><span>Ведущий пластический хирург</span></div>							
				</div>				
				<div class = 'item' id = 'item3'>				
					<div class = 'text1'><span>Бейскенов Ильяс Саматович</span></div>										
					<div class = 'text2'><span>Ведущий пластический хирург</span></div>						
				</div>				
				<div class = 'item' id = 'item4'>				
					<div class = 'text1'><span>Бейскенов Ильяс Саматович</span></div>										
					<div class = 'text2'><span>Ведущий пластический хирург</span></div>					
				</div>
			</div>
			<div class = 'iosSliderButtons'>
				<div class = 'button'></div>
				<div class = 'button'></div>
				<div class = 'button'></div>
				<div class = 'button'></div>
			</div>
		</div>
		<div class="beis_rel">
			<div class="beis_sl"></div>
		</div>
		<section class="benefits">
			<div class="cr">
				<div class="b_row">
					<div class="img"></div>
					<span>Великолепные результаты</span>
				</div>
				<div class="b_row">
					<div class="img b2"></div>
					<span>Гарантия качества</span>
				</div>
				<div class="b_row">
					<div class="img b3"></div>
					<span>Европейские стандарты</span>
				</div>
				<div class="b_row">
					<div class="img b4"></div>
					<span>Уникальные методики</span>
				</div>
				<div class="b_row">
					<div class="img b5"></div>
					<span>Индвивидуальный подход</span>
				</div>
			</div>
		</section>
		<section class="sur_slider">
			<h3 class="up_heading">Услуги пластической хирургии</h3>
			<div class="z_slider">
				<div class="cr">
					<div class="a_menu">
						<div class="rel">
							<a class="glav" href="#">Перейти к услугам</a>
							<div class="sub_usl">
								<div class="frame">
									<?php foreach($parent_services as $service): ?>
									<a href="/services/<?=$service['Service']['alias'];?>"><?=$service['Service']['title'];?></a>
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="rt-showcase">
					<div id="main">
					  <div id="iphone">
						<div id="webpage"><img src="img/123.jpg" width="1400" height="732">
						  <div id="retina">
							<div class="text"></div>
							<div class="blik"><img src="img/blik.png" alt="Лупа" width="240" height="240"></div>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</section>
		<section class="oblasty">
			<h3 class="up_heading">Оперируемые области золотого сечения</h3>
					<div class="obl_part">
				<div class="cr">
					<div class="a_menu">
						<div class="rel">
							<a class="glav" href="#">Перейти к услугам</a>
							<div class="sub_usl">
								<div class="frame">
									<?php foreach($parent_services as $service): ?>
									<a href="/services/<?=$service['Service']['alias'];?>"><?=$service['Service']['title'];?></a>
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
					<div class="c_dev"></div>
					<div class="left_sides sides">
						<a href="/services/endoskopicheskaya">
							<div>
								<span>Эндоскопическая</span> 
								<p>подтяжка лба и бровей</p>
							</div>
						</a>
						<a href="/services/otoplastika">
							<div>
								<span>Отопластика</span>
								<p>устранение лопоухости коррекция мочек уха</p>
							</div>
						</a>
						<a href="/services/podtyazhka_litsa">
							<div>
								<span>Подтяжка лица</span>
								<p>SMAS лифтинг Эндоскопический лифтинг</p>
							</div>
						</a>
					</div>
					<div class="arows"></div>
					<div class="right_sides sides">
					<a href="/services/plastika_vek">
						<div>
							<span>Пластика век</span>
							<p>верхняя блефаропластика, нижняя блефаропластика, европеизация</p>
						</div>
					</a>
					<a href="/services/rinoplastika">
						<div>
							<span>Ринопластика</span>
							<p>коррецкия спинки носа и устранение горбинки</p>
						</div>
					</a>
					<a href="/services/nosogubnye_skladki">
						<div>
							<span>Носогубные складки</span>
							<p>липофилинг и контурная пластика лица</p>
						</div>
					</a>
					<a href="/services/plastika_shei">
						<div>
							<span>Пластика шеи</span>
							<p>коррекция контуров шеи и подбородка</p>
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
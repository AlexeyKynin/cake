<?php
/*
Template Name: Доставка и оплата
*/
?>

<?php get_header('mini');?>

	<section class="s-payment">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-auto">
					<h2 class="h2"><?php the_title();?></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-auto">
					<div class="s-payment-content">
						<h4 class="h4">
							КАК ЗАКАЗАТЬ ТОРТ?
						</h4>
					</div>
				</div>
			</div>
			<div class="s-payment-contact">
				<div class="row justify-content-between">
					<div class="col-md-8">
						<nav class="soc s-payment-contact-soc animated fadeInLeft delay-1s slow">
							<ul>
								<li><a href="#"><i class="fa fa-phone"></i></a><p>Заказать торт вы можете по телефону: <span class="phone"><?php the_field('phone_number_one', 21);?></span></p></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a><p>Написать нам в группу в instagram <span>https://instagram.com/family_cake</span></p></li>
								<li><a href="#"><i class="fa fa-vk"></i></a><p>Написать нам в группу в контакте: <span>https://vk.com/family_cake</span></p></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-4">
						<div class="s-payment-contact-svgimg animated infinite bounce delay-1s">
<!--							<img src="img/icon/002-contract.svg" alt="Контакты">-->
                            <img src="<?php bloginfo("template_url"); ?>/assets/img/icon/002-contract.svg" alt="Контакты">
						</div>
					</div>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12">
						<div class="s-payment-text animated fadeIn">
							<p>Нам важен каждый <span>клиент!</span> <br>И потому на все письменные запросы вам будет дан ответ <span>в течении часа!</span></p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-auto">
						<div class="s-payment-content animated fadeIn">
							<h4 class="h4">
								Как оплатить заказ?
							</h4>
						</div>
					</div>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12">
						<div class="s-payment-text animated fadeIn">
							<p>Мы уверенны в собственной продукции, по этому, ваш заказ будет взят вработу сразу после оплаты всего <span>50% его стоимости!</span>
								<br>Остальную часть оплачиваете при получении. Оплатить можно как наличными так и переводом.</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-auto">
						<div class="s-payment-content animated fadeIn">
							<h4 class="h4">
								А возможна доставка моего заказа?
							</h4>
						</div>
					</div>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12">
						<div class="s-payment-text animated fadeIn">
							<p>Доставка возможна по предварительному согласованию по телефону в черте г. Барнаула.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>
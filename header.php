<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="shortcut icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">

	<title>Family cake</title>

	<?php wp_head(); ?>

</head>
<body class="custom-background">

<div class="top-nav" id="top-nav">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-auto">
				<?php the_custom_logo();?>
			</div>
			<!-- /.col-md -->
			<div class="col-md-auto">
                <?php wp_nav_menu( array(
                    'menu'            => 'top_menu',
	                'container'       => 'ul',
	                'container_class' => 'top-nav_menu',
	                'menu_class'      => 'top-nav_menu',
	                'menu_id'         => '',
	                'echo'            => true,
	                'fallback_cb'     => 'wp_page_menu',
	                'before'          => '',
	                'after'           => '',
	                'link_before'     => '',
	                'link_after'      => '',
	                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                'depth'           => 0,
	                'walker'          => '',
                ))?>
			</div>
			<!-- /.col-md -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
<!-- /.top-nav -->

<header class="header" id="header">
<!--<header class="header" id="header" --><?php //the_post_thumbnail(); ?><!--">-->
	<div class="header-content">
		<div class="botton-nav" id="botton-nav">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-md-auto">
						<div class="botton-nav-phone">
							<div class="botton-nav-phone-text">
								<p>Заказать по телефону</p>
								<p class="phone"><?php the_field('phone_number_one', 21);?></p>
							</div>
							<div class="svg-smartphone" id="svg-smartphone"></div>
						</div>
					</div>
					<div class="col-md-auto">
						<nav class="soc">
							<ul>
                                <li><a href="<?php the_field('instagram',21);?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php the_field('vk',21);?>"><i class="fa fa-vk"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- /.botton-nav -->
	</div>
</header>
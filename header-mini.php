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
<div class="modal">
    <div class="modal-content">
        <div class="close">&times;</div>
        <div class="modal-content-img" style="background-image: url(img/cake_catalog/img_svad_1.jpg)"></div>
        <div class="modal-content-description">
            <h3 class="h3">"Весенняя радость"</h3>
            <div class="modal-content-price">
                <p><span>1600</span> руб, кг</p>
            </div>
            <div class="modal-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam assumenda debitis, deserunt distinctio dolore dolores eaque eos et ex fuga fugiat hic illo iusto laudantium maiores minima minus mollitia nesciunt nobis non omnis porro quae quam ratione repellendus saepe sapiente sunt temporibus veniam veritatis vitae voluptate? Deleniti dolorem dolorum eos esse maxime, minima molestiae quibusdam rem veniam? Accusamus accusantium alias aliquid animi at atque beatae debitis deleniti dicta doloribus esse harum incidunt libero maiores maxime minima natus nisi obcaecati officia perferendis placeat porro, qui quidem quod, reiciendis sed ut vitae. Ab aperiam asperiores aspernatur commodi corporis cupiditate, eligendi eveniet exercitationem facere facilis illum in inventore, magnam molestiae natus non odio omnis perferendis porro quia reiciendis sed voluptates voluptatum! Accusamus autem ea eligendi eos eveniet itaque odio, quaerat quasi, rem rerum sit, ullam ut voluptatibus. A accusantium cumque libero porro provident quis quod, quos unde veniam. Ipsam, reprehenderit veniam.</div>
        </div>
    </div>
</div>
<div class="top-nav top-nav-mini" id="top-nav">
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

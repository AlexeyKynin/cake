<?php
/*
Template Name: Главная
*/
?>
<?php get_header();?>



<section class="s-catalog" id="s-catalog">
    <div class="container">
      <div class="row justify-content-center">
      	<div class="col-md-12">
        	<?php echo do_shortcode('[recent_products per_page="4" columns="4"]'); ?>
        </div>
  		</div> 
    </div>	
</section>

<section class="s-catalog" id="s-catalog">
    <div class="container">


        <div class="row justify-content-center">
            <div class="s-catalog-caption">
                <h2 class="h2">
					<?php
					if( is_category() ) {
						$cat_name = get_queried_object()->name;
						$cat_slug = get_queried_object()->slug;
						echo $cat_name;}
					?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
				<?php get_sidebar();?>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-9">
                <div class="s-catalog-content">

					<?php
					$posts = get_posts( array(
						'numberposts' => 10,
						'category_name' => $cat_slug,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );

					foreach( $posts as $post ){
						setup_postdata($post);
						?>
                        <div class="s-catalog-content-element">
                            <div class="s-catalog-content-element-img">
								<?php the_post_thumbnail('spec_thumb_catalog'); ?>
                            </div>
                            <div class="s-catalog-content-element-description">
                                <h3 class="h3"><?php the_title();?></h3>
                                <div class="s-catalog-content-element-description-price">
                                    <p><span><?php the_field('object-price')?></span> руб, кг</p>
                                </div>
                                <a href="<?php the_permalink();?>" class="s-catalog-content-element-description-button">Подробно</a>
<!--                                <a href="#" data-target = "modal" class="s-catalog-content-element-description-button">Подробно</a>-->
                            </div>
                        </div>
						<?php
					}
					wp_reset_postdata(); // сброс
					?>
                </div>
            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.row -->
    </div>
</section>

<?php //do_action('woo'); ?>

<section class="s-dignity" id="s-dignity">
	<div class="s-dignity-body" id="s-dignity-body" style="background: url(assets/img/fon_catalog.png) 0 0 repeat">
		<!--<div class="s-dignity-body-content">-->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="s-dignity-body-element">
						<img class="s-dignity-body-element-img" src="<?php bloginfo("template_url"); ?>/assets/img/dignity/003-vegetables.svg" alt="Натуральные продукты">
						<div class="s-dignity-body-element-text">
							<p>Мы не используем порошки и заменители <br>– <span>только натуральные продукты</span> <br>высокого качества от проверенных поставщиков</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="s-dignity-body-element">
						<img class="s-dignity-body-element-img" src="<?php bloginfo("template_url"); ?>/assets/img/dignity/002-tray.svg" alt="С любовью">
						<div class="s-dignity-body-element-text">
							<p>Все торты производятся <br><span>с любовью</span> <br>и исключительно <span>вручную</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="s-dignity-body-element">
						<img class="s-dignity-body-element-img" src="<?php bloginfo("template_url"); ?>/assets/img/dignity/001-cake.svg" alt="Уникальные торты">
						<div class="s-dignity-body-element-text">
							<p>Каждый торт – <span>уникален</span>,<br> обладает особым шармом<br> и неповторимым <span>дизайном</span></p>
						</div>
					</div>
				</div>
			</div>
			<!--</div>-->
		</div>
	</div>
</section>

<section class="s-reviews">
<!--<section class="s-reviews" style="background: url(assets/img/fon_catalog-ping2.png) 0 0 repeat">-->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="h2">Отзывы</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 align-self-center">
				<div class="owl-carousel reviews">
					<div class="review">
						<img src="img/icon/002-smile.svg" alt="Смайл">
						<div class="review-stars">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i
								class="fa fa-star"></i><i class="fa fa-star"></i><i
								class="fa fa-star"></i>
						</div>
						<div class="review-text">
							Тортик просто огонь! Очень вкусный, дизайн лучше чем ожидала, я в восторге. Спасибо, большое за такую красоту)))
						</div>
						<div class="review-header">Светлана</div>
						<div class="review-data">1.12.17</div>
					</div>
					<div class="review">
						<img src="img/icon/002-smile.svg" alt="Смайл">
						<div class="review-stars">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i
								class="fa fa-star"></i><i class="fa fa-star"></i><i
								class="fa fa-star"></i>
						</div>
						<div class="review-text">
							Спасибо Вам большое за тортик. Мы уже действительно Ваши постоянные клиенты. Ни одно торжество не обходится без Вас. И каждый раз Вы не перестаете нас удивлять. Ювелирная работа . Торт выше всяких похвал. Ну и итог мероприятия- съеден весь . Спасибо Вам за Ваше творчество
						</div>
						<div class="review-header">Оксана</div>
						<div class="review-data">29.07.16</div>
					</div>
					<div class="review">
						<img src="img/icon/002-smile.svg" alt="Смайл">
						<div class="review-stars">
							<i class="fa fa-star"></i><i class="fa fa-star"></i><i
								class="fa fa-star"></i><i class="fa fa-star"></i><i
								class="fa fa-star"></i>
						</div>
						<div class="review-text">
							Спасибо Вам огромное за такой безумно вкусный и красивый торт, все были в восторге от нежного вкуса торта.
						</div>
						<div class="review-header">Катерина Ивановна</div>
						<div class="review-data">2.01.18</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="popmake-106 s-reviews-button">Оставить отзыв</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>

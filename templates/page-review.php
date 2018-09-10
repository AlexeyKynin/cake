<?php
/*
Template Name: Отзывы
*/
?>

<?php get_header('mini');?>

	<section class="s-reviews">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="h2">Отзывы</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<?php echo do_shortcode('[testimonial_view id="1"]'); ?>
				</div>
			</div>
            <div class="row justify-content-between align-items-center">
				<div class="col-md-12">
					<button class="popmake-106 s-reviews-button">Оставить отзыв</button>
				</div>
			</div>
		</div>
	</section>


<?php get_footer();?>
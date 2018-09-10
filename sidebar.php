<div class="left-siderbar">
	<ul class="left-siderbar_menu">
		<?php
		$args = array(
			'show_option_all'    => '',
			'show_option_none'   => __('No categories'),
			'orderby'            => 'name',
			'order'              => 'ASC',
			'show_last_update'   => 0,
			'style'              => 'list',
			'show_count'         => 0,
			'hide_empty'         => 0,
			'use_desc_for_title' => 1,
			'child_of'           => 0,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => true,
			'title_li'           => NULL,
			'number'             => NULL,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 0,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => 'Walker_Category',
			'hide_title_if_empty' => false,
			'separator'          => '<br />',
		);

		wp_list_categories( $args );
        ?>
	</ul>
	<?php wp_reset_postdata(); ?>
</div>
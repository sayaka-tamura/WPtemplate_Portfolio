<?php get_header(); ?>

<!-- 	<h2>This is the portfolio of Sayaka Tamura. Ain't it grand?</h2> -->
		<?php
			//create arguments array for custom loop
			$args = array(
			'category_name' => 'featured',
			'order' => 'DESC',
			'orderyby' => 'date',
			'posts_per_page' => 9
			);

			//create a custom loop
			$featured = new WP_Query($args);
		?>
<div class="featured-posts">
		<?php
			// runn the loop
			if($featured->have_posts()) :
			while($featured->have_posts()) : $featured->the_post();
			get_template_part( 'content','front' );
			endwhile;
			else: ?>
			<p>Query returned no posts</p>
			<?php endif;

			//RESET The Loop
			wp_reset_postdata();
		?>
		</div>

<?php get_footer(); ?>

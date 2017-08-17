<div class="work-thumb">
    <a href="<?php the_permalink(); ?>">
	     <?php the_post_thumbnail('feature-thumb'); ?>
		<div class="work-info">
			<h2><?php the_title(); ?></h2>
			<div class="info-reveal">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</a>
</div>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<h3 class = 'date'><?php the_date(); ?> </h3>

	<h2 id = 'post-<?php the_ID(); ?>' class = '<?php post_class(); ?>' >

		<a href = '<?php the_permalink() ?>' rel = 'bookmark' title = 'Link to <?php the_title(); ?>' >

			<?php the_title(); ?>

		</a>

	</h2>

	<?php the_content(); ?>
	<?php wp_link_pages(); ?>

	<p class = 'postmeta'>

		Posted on <?php the_time( get_option( 'date_format') ); ?>
		@ <?php the_time(); ?>

	</p>

	<div class = 'commentblock' >
		
		<?php comments_template(); ?>

	</div>

<?php endwhile; ?>
<div class = 'navigation'>
		
	<?php posts_nav_link(); ?>

</div>

<?php endif; ?>
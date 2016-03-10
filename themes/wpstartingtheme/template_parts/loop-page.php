<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
	<div <?php post_class(); ?> id = 'post-<?php the_ID(); ?>'>

		<h2><a href = '<?php the_permalink()?>' title = 'Permalink to <?php the_title_attribute(); ?>'> <?php the_title() ?> </a></h2>
		
		<?php the_content( 'Read more...' ); ?>
		<?php wp_link_pages(); ?>

		<p class = 'postmeta'>

			Posted on <?php the_time( get_option( "date-format") );  ?> at <?php the_time(); ?>

		</p>

	</div><!-- #post-n -->

<?php endwhile; else: ?>

	<p>

		<?php _e( 'Sorry, no posts matches your criteria' );?>

	</p>
	
<?php endif; ?>
<?php 
/**
 * Author: Min Nam
 * 
 * Template for archieve.php
 * 
**/

$name_widget = 'first-widget';

?>

<div id = 'sidebar' class = 'widget-area' >

<?php if( !dynamic_sidebar( $name_widget ) ) : ?>

	<div id = 'search' class = 'widthget-container widget_search' >

			<?php get_search_form(); ?>

	</div>

	<div id = 'archives' class = 'widget-container' >
		
		<h3 class = 'widget-title'><?php _e( 'Archives' ); ?></h3>

		<ul>
			
			<?php wp_get_archives( 'type=monthly' ); ?>

		</ul>

	</div>

<?php endif; ?>

</div>
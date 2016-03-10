<?php 
/**
 * Author: Min Nam
 * 
 * Template for index.php
 * 
**/
?>
<!-- Header -->
<?php get_header(); ?>

<!-- Loop -->

<?php 
	
	if( is_home() ) {

		get_template_part( 'template_parts/loop', 'page' );

	} else {

		get_template_part( 'template_parts/loop' );

	}

?>

<!-- Sidebar -->
<?php get_sidebar() ?>

<!-- Footer -->
<?php get_footer() ?>



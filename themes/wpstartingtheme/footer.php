<?php 
/**
 * Author: Min Nam
 * 
 * Template for footer.php
 * 
**/
?>
<div id = 'footer' class = 'section' >

	<p class = 'copyright' >

		<?php echo '&copy; ' . date( 'Y') . get_bloginfo( 'name' ); ?>

	</p>

	<div class = 'contact' >
		
		<?php echo get_theme_mod( 'footer_text', '' ); ?>

	</div>

</div>

<?php wp_footer() ?>

</div> <!-- #wrapper end -->
</body>
</html>
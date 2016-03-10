<?php 
/**
 * Author: Min Nam
 * 
 * Template for functions.php
 * 
**/
	
function add_script() {

	$dir = preg_match_all('/\/wp-content\/(.*)/', get_stylesheet_directory() . '/js/' , $result, PREG_PATTERN_ORDER);

	$dir = '.' . $result[ 0 ][ 0 ];

	foreach ( new DirectoryIterator( $dir ) as $fileInfo ) {

	    if( $fileInfo->isDot() ) continue;

	    $filePath = get_stylesheet_directory_uri() . '/js/' . $fileInfo->getFilename();

	    echo "<script src = '$filePath'></script>" ;
	    
	}

}	

add_action( 'wp_footer', 'add_script' );


?>
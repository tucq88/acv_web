<?php
/*
Plugin Name: Relative Image
Plugin URI: http://www.atmarkcafe.org
Description: Convert absolute url lto relative
Author: acvdev
Author URI: http://www.atmarkcafe.org
Version: 1.0
*/

add_filter('image_send_to_editor','abs_to_relative_url',5,8);

function abs_to_relative_url($html, $id, $caption, $title, $align, $url, $size, $alt)
{
	
	preg_match_all ( '/(?:src|href)\s*?\=\s*?[\'"](http.*?)[\'"]/i', $html, $matches );
	
	$replaces = array ();
	if (isset ( $matches [1] )) {
		foreach ( $matches [1] as $src ) {
			list ( $scheme, $href ) = explode ( '://', $src );
			if ($href != '') {
				$href = substr ( $href, strpos ( $href, '/' ) ) ;
				$replaces [$src] = $href;
			}
		}
	}
	
	return (strtr ( $html, $replaces ));
}

?>
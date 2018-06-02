<?php
/**
 * Plugin Name: Add HW!
 * Description: Цветной Hello World!
 * Plugin URI:  #
 * Author URI:  #
 * Author:      Ivan
 * Version:     1.0
 *
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 */

add_action( 'wp_footer', 'colorful_hw' );

function colorful_hw(){
	if( date("G") >= 0 )
	{
		$text = "<div style='color:black;'>Hello World!</div>";
	}
	if( date("G") >= 6 )
	{
		$text = "<div style='color:blue;'>Hello World!</div>";
	}
	if( date("G") >= 12 )
	{
		$text = "<div style='color:green;'>Hello World!</div>";
	}
	if( date("G") >= 18 )
	{
		$text = "<div style='color:red;'>Hello World!</div>";
	}

	echo $text;
}

?>
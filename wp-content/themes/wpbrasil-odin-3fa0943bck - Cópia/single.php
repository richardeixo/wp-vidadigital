<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 
if ($device == "desktop") {
	include('custom-eixo/desktop/single.php');
}else{
	include('custom-eixo/mobile/single.php');
}
get_footer($device); 
?>
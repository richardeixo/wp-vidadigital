<?php
/**
 * Template Name: Modelo Trabalhe 
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 
if ($device == "desktop") {
	include('custom-eixo/desktop/trabalhe-na-vida.php');
}else{
	include('custom-eixo/mobile/trabalhe-na-vida.php');
}
get_footer($device); 
?>
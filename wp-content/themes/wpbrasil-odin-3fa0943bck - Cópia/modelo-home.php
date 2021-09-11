<?php
/**
 * Template Name: Modelo Home1
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 
if ($device == "desktop") {
	include('custom-eixo/desktop/home.php');
}else{
	include('custom-eixo/mobile/home-m.php');
}
get_footer($device); 
?>
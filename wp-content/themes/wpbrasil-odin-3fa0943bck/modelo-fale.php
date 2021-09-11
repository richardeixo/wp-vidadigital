<?php
/**
 * Template Name: Modelo Fale 
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header($device); 
if ($device == "desktop") {
	include('custom-eixo/desktop/fale-com-a-vida.php');
}else{
	include('custom-eixo/mobile/fale-com-a-vida.php');
}
get_footer($device); 
?>
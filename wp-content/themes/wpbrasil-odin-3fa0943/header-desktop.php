<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/bootstrap5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/fonts.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/global.css">
	<?php  if (is_page('Home')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-slider-desk.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-combos.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-card-servicos.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-destaque-venda.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-destaque-vendacinza.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-unidadehome.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-diferenciais.css">


	<?php }?>
	<?php  if (is_page('Blog')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/comp-cards-conteudo-desk.css">
	<?php }?>

</head>

<body <?php body_class(); ?>>
		<div class="main">


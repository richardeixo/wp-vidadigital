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
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/header.css">
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

	<?php  if (is_page('Sobre')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/sobre.css">
	<?php }?>
	<?php  if (is_page('Fale com a Vida Digital')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/fale.css">
	<?php }?>
	<?php  if (is_page('Trabalhe na Vida Digital')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/css/trabalhe.css">
	<?php }?>
</head>

<body <?php body_class(); ?>>
<div class="menu-fixo">
		<div class="container header">
			<div class="menu-logo">
				<a href="<?php home_url() ?>/vidadigital/"><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/logo.png"></a>
			</div>
			<div class="menu-itens">
				<ul>
					<li><a href="<?php home_url() ?>/vidadigital/">Home</a></li>
					<li><a href="<?php home_url() ?>/vidadigital/sobre/">Sobre</a></li>
					<li><a href="<?php home_url() ?>/vidadigital/dicas-da-bia/">Dicas da Bia</a></li>
					<li><a href="<?php home_url() ?>/vidadigital/trabalhe-na-vida-digital/">Trabalhe na Vida</a></li>
					<li><a href="<?php home_url() ?>/vidadigital/contato/">Contato</a></li>
				</ul>
			</div>
			<div class="menu-icons">
				<a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-yt.png"></a>
				<a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-ig.png"></a>
				<a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-fb.png"></a>
				<a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-tw.png"></a>
				<a class="searchbutton" href="#searchbar"  data-bs-toggle="collapse" data-bs-target="#searchbar" aria-expanded="false" aria-controls="searchbar"><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/lupa.png"></a>
			</div>
			
		</div>
	</div>
	<div class="collapse" id="searchbar">
		<div class="card card-body searchbar">
		<input type="text" placeholder="Como podemos ajudar?"><a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/search-lupa.png"/></a> 
		</div>
	</div>
		<div class="main">


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
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/header-m.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/footer-m.css">
	<?php  if (is_page('Blog')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/comp-cards-conteudo-mobile.css">
	<?php }?>
  <?php  if (is_page('Sobre')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/sobre.css">
	<?php }?>
  <?php  if (is_page('Fale com a Vida Digital')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/fale.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/comp-unidadefale.css">
	<?php }?>
	<?php  if (is_page('Trabalhe na Vida Digital')){ ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/css/trabalhe.css">
	<?php }?>
</head>


<body <?php body_class(); ?>>
	<div class="main">

<section class="menu-mobile">
       <nav class="navbar navbar-default">
           <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php home_url() ?>/vidadigital/">
                   <img alt="Brand" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/logo.png">
                 </a>
               <a class="btn-search" href="#searchbar"  data-bs-toggle="collapse" data-bs-target="#searchbar" aria-expanded="false" aria-controls="searchbar"><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/lupa-m.png"></a>

             </div>

             	<div class="menu-icons">
					<a href=""><img class="yt" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-yt.png"></a>
					<a href=""><img class="ig" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-ig.png"></a>
					<a href=""><img class="fb" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-fb.png"></a>
					<a href=""><img class="tw" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-tw.png"></a>
			   </div>


     </nav>
     <div class="collapse navbar-collapse" id="collapseExample">



               <div class="tab-pane">
                   <ul class="nav navbar-nav">
                       <a href="<?php home_url() ?>/vidadigital/"><li>Home<img src="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/imagens/setinha.png"></li></a>
                       <a href="<?php home_url() ?>/vidadigital/sobre/"><li>Sobre<img src="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/imagens/setinha.png"></li></a>
                       <a href="<?php home_url() ?>/vidadigital/dicas-da-bia/"><li>Dicas da Bia<img src="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/imagens/setinha.png"></li></a>
                       <a href="<?php home_url() ?>/vidadigital/trabalhe-na-vida-digital/"><li>Trabalhe na Vida<img src="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/imagens/setinha.png"></li></a>
                       <a href="<?php home_url() ?>/vidadigital/contato/"><li>Contato<img src="<?php bloginfo('template_directory') ?>/custom-eixo/mobile/imagens/setinha.png"></li></a>
                    </ul>
               </div>

</div>
<div class="collapse" id="searchbar">
		<div class="card card-body searchbar">
		<input type="text" placeholder="Como podemos ajudar?"><a href=""><img src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/search-lupa.png"/></a>
		</div>
	</div>

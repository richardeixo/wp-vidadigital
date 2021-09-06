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
</head>


<body <?php body_class(); ?>>
	<div class="main">

<section class="menu-mobile">
       <nav class="navbar navbar-default">
           <div class="container-fluid">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php home_url() ?>/Imeb/">
                   <img alt="Brand" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/logo.png">
                 </a>
               <a class="btn-search" href=""><img alt="Brand" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/lupa-m.png"></a>
               
             </div>

             	<div class="menu-icons">
					<a href=""><img class="yt" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-yt.png"></a>
					<a href=""><img class="ig" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-ig.png"></a>
					<a href=""><img class="fb" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-fb.png"></a>
					<a href=""><img class="tw" src="<?php bloginfo('template_directory') ?>/custom-eixo/desktop/imagens/ico-tw.png"></a>
			   </div>

             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
               <div style="width: 100px; height: 100px; background: #000;"
                       <div class="tabb">
                           <div class="panel with-nav-tabs panel-default">
                               <div class="panel-body">
                                   <div class="tab-content">   
                                       <div class="tab-pane fade in">
                                           <ul class="nav navbar-nav">
                                               <li><a href="<?php home_url() ?>/Imeb/">Home</a></li>
                                               <li><a href="#">Agende</a></li>
                                               <li><a href="#">Exames</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/convenios">Convênios</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/unidades-lista">Unidades</a></li>
                                               <li><a href="#">Resultado de Exames</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/blog">Cuida da sua Saúde</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/fale-conosco">Fale Conosco</a></li>
                                               <li><a href="<?php home_url() ?>/Imeb/materiais-gratuitos">Materiais Gratuitos</a></li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
             </div>
         </div>
     </nav>

<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 */
define("DIR", get_template_directory_uri());
define("URL",get_bloginfo("url"));

global $home;
global $blog;
global $contacto;
global $franquicias;
global $locales;
global $nosotros;

$home=get_permalink(4);
$blog=get_permalink(10);
$contacto=get_permalink(14);
$franquicias=get_permalink(12);
$locales=get_permalink(6);
$nosotros=get_permalink(8);

global $facebook;
global $instagram;
global $youtube;

$facebook=get_field("facebook",4);
$instagram=get_field("instagram",4);
$youtube=get_field("youtube",4);

?>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.10.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.10.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo DIR; ?>/assets/images/log-260x128-92.png" type="image/x-icon">
  <meta name="description" content="Página de inicio de RES">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/theme/css/style.css">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/theme/css/fer-style.css">
  <link rel="stylesheet" href="<?php echo DIR; ?>/assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <?php wp_head(); ?>
  
</head>
<body>
<section id="menu-1w">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="<?php echo $home; ?>" class="navbar-logo"><img src="<?php echo DIR; ?>/assets/images/log-260x128-92.png" alt="Mobirise"></a>
                        
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="header-socials hidden-sm-down">
                      <?php if($facebook != ""){ ?>
                      <li><a href="<?php echo $facebook; ?>" target="_BLANK"><img src="<?php echo DIR; ?>/assets/images/facebook-icon.png"></a></li>
                      <?php } ?>
                      <?php if($instagram != ""){ ?>
                      <li><a href="<?php echo $instagram; ?>" target="_BLANK"><img src="<?php echo DIR; ?>/assets/images/instagram-icon.png"></a></li>
                      <?php } ?>
                      <?php if($youtube != ""){ ?>
                      <li><a href="<?php echo $youtube; ?>" target="_BLANK"><img src="<?php echo DIR; ?>/assets/images/youtube-icon.png"></a></li>
                      <?php } ?>
                    </ul>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                      <li class="nav-item"><a class="nav-link link" href="<?php echo $locales; ?>">LOCALES</a></li>
                      <!-- <li class="nav-item dropdown"><a class="nav-link link" href="<?php echo $nosotros; ?>" aria-expanded="false">NOSOTROS</a></li> -->

                      <li class="nav-item">
                        <a class="nav-link link" href="<?php echo $nosotros; ?>">NOSOTROS</a>
                        <!-- <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo $nosotros; ?>">Nosotros</a>
                          <a class="dropdown-item" href="<?php echo $nosotros; ?>#content1-3">Nuestra Empresa</a>
                          <a class="dropdown-item" href="<?php echo $nosotros; ?>#header3-i">Nuestros Productos</a>
                        </div> -->
                      </li>
                      <li class="nav-item"><a class="nav-link link" href="<?php echo $productos; ?>">PRODUCTOS</a></li>
                      <li class="nav-item"><a class="nav-link link" href="<?php echo $blog; ?>">BLOG</a></li>
                      <li class="nav-item"><a class="nav-link link" href="<?php echo $franquicias; ?>">FRANQUICIAS</a></li>
                      <li class="nav-item dropdown open">
                        <a class="nav-link link dropdown-toggle" href="<?php echo $contacto; ?>" data-toggle="dropdown-submenu" aria-expanded="true">CONTACTO</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo $contacto; ?>">Contacto</a>
                          <a class="dropdown-item" href="<?php echo $contacto; ?>#work">Trabaja con Nosotros</a>
                        </div>
                      </li>
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
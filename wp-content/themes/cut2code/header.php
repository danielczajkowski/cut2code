<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

    <meta charset="<?php bloginfo('charset')?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) ? get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) : get_bloginfo( 'description' ); ?>" />
    
    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/assets/images/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <title><?php wp_title(''); ?></title>

    <?php wp_head();?>
</head>

<body id='topPage' <?php body_class()?>>

<nav id="main-menu" class="container container__menu">
  <?php get_template_part( 'components/small_dots'); ?>
  <a href="<?php echo home_url() ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="MAD HATTERS - Logo">
  </a>
  <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

  <button id="burger" class="menu_button">
    <span></span>
    <span></span>
    <span></span>
  </button>
</nav>


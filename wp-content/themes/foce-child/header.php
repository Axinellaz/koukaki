<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

     <header class="header site-header" id="masthead" >

      <nav id="navigation">
 
        

       <div class="container-menu ">
          <ul>
              <li><a class="link__nav" href="#story">Histoire</a></li>
              <li><a class="link__nav" href="#characters">Personnages</a></li>
              <li><a class="link__nav" href="#place">Lieu</a></li>
              <li><a class="link__nav" href="#studio">Studio Koukaki</a></li>
              <li><a class=" link-footer-menu-nav" href="#studio">Studio Koukaki</a></li>
              <div class="container__nav-imgs">
                <img  class="img__nav-cat-black" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/cat-black.png'; ?> ">
                <img  class="img__nav-cat-blue" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/cat-blue.png'; ?> ">
                <img  class="img__nav-cat-orange" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/cat-orange.png'; ?> ">
                <img  class="img__nav-Flower" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/Flower.png'; ?> ">
                <img  class="img__nav-Hibiscus" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/Hibiscus.png'; ?> ">
                <img  class="img__nav-logo" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/logo-menu-burger.png'; ?> ">
                <img  class="img__nav-Orchid" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/Orchid.png'; ?> ">
                <img  class="img__nav-Ramdom-flower" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/Random-Flower.png'; ?> ">
                <img  class="img__nav-sunflower" src="<?php echo get_stylesheet_directory_uri() . './img-menu-burger/Sunflower.png'; ?> ">
              </div>
          </ul> 
        </div>

      </nav>
        <a class="title-nav-fermer" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <button class="nav-toggle" type="button" aria-label="toggle curtain navigation">
        <span class="line l1"></span>
        <span class="line l2"></span>
        <span class="line l3"></span>
      </button>

     </header>

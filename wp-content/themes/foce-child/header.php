<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

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

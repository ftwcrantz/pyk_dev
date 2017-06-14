<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>Ahnström & Pyk</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />
	
	<?php wp_head( ); ?>
</head>

<body <?php body_class(); ?>>

<header class="wrapper">
  <div class="row">
    <div class="icon-container">
      <div class="hidden-box"></div>
      <a href="" id="logo-home"><img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" /></a>
      <a id="header-menu-open" class="icon-images">
        <img class="menu-open" src="<?php echo get_template_directory_uri(); ?>/images/header/menu.svg" />
        <img class="menu-close hidden" src="<?php echo get_template_directory_uri(); ?>/images/header/menu-close.svg" />
      </a>
    </div>
    <div id="mobile-menu" class="hidden">
      <ul>
        <?php $the_query = new WP_Query( 'pagename=philosophy' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a id="philosophy-container-link" data-toggler-group="toggla" href="#philosophy-container" class="main-link mini-toggler"><?php the_title();?></a></li>
        <?php endwhile;?>
        <?php $the_query = new WP_Query( 'pagename=about-us' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a id="about-us-container-link" data-toggler-group="toggla" href="#about-us-container" class="main-link mini-toggler"><?php the_title();?></a></li>
        <?php endwhile;?>
        <?php $the_query = new WP_Query( 'pagename=projects' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a id="projects-container-link" data-toggler-group="toggla" href="#projects-container" class="main-link mini-toggler"><?php the_title();?></a></li>
        <?php endwhile;?>
        <?php $the_query = new WP_Query( 'pagename=contact' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a id="contact-container-link" href="#contact-container" class="main-link"><?php the_title();?></a></li>
        <?php endwhile;?>
      </ul>
    </div>
  </div>
</header>
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
      <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" />
      <a class="icon-images mini-toggler" href="#mobile-menu"><img src="<?php echo get_template_directory_uri(); ?>/images/header/menu.svg" /></a>
    </div>
    <div id="mobile-menu" class="hidden">
      <ul>
        <?php $the_query = new WP_Query( 'pagename=philosophy' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a href="#philosophy-container" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title();?></a></li>
        <?php endwhile;?>
        <?php $the_query = new WP_Query( 'pagename=about-us' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a href="#about-container" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title();?></a></li>
        <?php endwhile;?>
        <?php $the_query = new WP_Query( 'pagename=projects' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a href="#projects-container" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title();?></a></li>
        <?php endwhile;?>
        <?php $the_query = new WP_Query( 'pagename=contact' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
          <li><a href="#contact-container" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title();?></a></li>
        <?php endwhile;?>
      </ul>
    </div>
  </div>
</header>
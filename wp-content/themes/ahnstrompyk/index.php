<?php get_header( ); ?>

<?php $the_query = new WP_Query( 'pagename=philosophy' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row philosophy-toggle">
    <a id="philosophy-close-toggle" href="#philosophy-container" data-toggler-group="toggler" data-toggler-group="toggla" class="mini-toggler">
      <div class="image-text">
        <img src="<?php the_post_thumbnail_url(); ?>"/>
        <p class="initial shadow"><?php echo get_post_meta($post->ID, 'bildtext', true); ?></p>
        <p class="header shadow"><?php the_title(); ?></p>
      </div>
    </a>
    <div id="philosophy-container" class="sub-sites hidden">
      <?php the_content(); ?>
      <div class="philosophy-close"><img class="menu-close" src="<?php echo get_template_directory_uri(); ?>/images/header/menu-close.svg" /></div>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=about-us' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="two" class="wrapper content-section">
  <div class="row about-toggle">
    <a id="lol" href="#about-us-container" data-toggler-group="toggler" data-toggler-group="toggla" class="mini-toggler">
      <div class="image-text">
        <img src="<?php the_post_thumbnail_url(); ?>"/>
        <p><?php the_title(); ?></p>
      </div>
    </a>
    <div id="about-us-container" class="sub-sites hidden">
      <?php the_content(); ?>
      <div class="about-close"><img class="menu-close" src="<?php echo get_template_directory_uri(); ?>/images/header/menu-close.svg" /></div>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=projects' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="three" class="wrapper content-section">
  <div class="row projects-toggle">
    <a href="#projects-container" data-toggler-group="toggler" data-toggler-group="toggla" class="mini-toggler">
      <div class="image-text">
        <img src="<?php the_post_thumbnail_url(); ?>"/>
        <p><?php the_title(); ?></p>
      </div>
    </a>
    <div id="projects-container" class="sub-sites hidden">
      <?php the_content(); ?>
      <div class="projects-close"><img class="menu-close" src="<?php echo get_template_directory_uri(); ?>/images/header/menu-close.svg" /></div>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=contact' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="four" class="wrapper content-section">
  <div class="row contact-toggle">
    <a class="contact-link" href="#contact-container">
      <div id="contact-container" class="image-text">
        <img id="initial-contact-img" src="<?php the_post_thumbnail_url(); ?>"/>
        <img id="sec-contact-img" class="hidden" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>"/>
        <p class="contact-title"><?php the_title(); ?></p>
        <div class="contact-meta hidden">
          <?php the_content(); ?>
          <span><a href="mailto:<?php echo get_post_meta($post->ID, 'epost', true); ?>"><?php echo get_post_meta($post->ID, 'epost', true); ?></a></span>
        </div>
      </div>
    </a>
  </div>
  <div id="footer" class="row">
  </div>
</section>
<?php endwhile;?>



<?php get_footer( ); ?>
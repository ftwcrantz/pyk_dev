<?php get_header( ); ?>

<?php $the_query = new WP_Query( 'pagename=philosophy' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row">
    <a href="#philosophy-container" data-toggler-group="toggler" data-toggler-group="toggla" class="image-text main-link mini-toggler">
      <img src="<?php the_post_thumbnail_url(); ?>"/>
      <p class="shadow"><?php echo get_post_meta($post->ID, 'bildtext', true); ?></p>
    </a>
    <div id="philosophy-container" class="sub-sites hidden">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=about-us' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row">
    <a href="#about-container" data-toggler-group="toggler" data-toggler-group="toggla" class="image-text main-link mini-toggler">
      <img src="<?php the_post_thumbnail_url(); ?>"/>
      <p><?php the_title(); ?></p>
    </a>
    <div id="about-container" class="sub-sites hidden">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=projects' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row">
    <a href="#projects-container" data-toggler-group="toggler" data-toggler-group="toggla" class="image-text main-link mini-toggler">
      <img src="<?php the_post_thumbnail_url(); ?>"/>
      <p><?php the_title(); ?></p>
    </a>
    <div id="projects-container" class="sub-sites hidden">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=contact' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
  <section id="contact-segment" class="wrapper content-section">
    <div class="row">
      <a id="contact-toggle" href="#contact-container" class="image-text main-link">
        <img src="<?php the_post_thumbnail_url(); ?>"/>
        <p class="contact-title"><?php the_title(); ?></p>
        <div class="contact-meta hidden">
          <?php the_content(); ?>
        </div>
      </a>
    </div>
    <div id="footer" class="row">
      <div class="contact-footer">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
<?php endwhile;?>



<?php get_footer( ); ?>
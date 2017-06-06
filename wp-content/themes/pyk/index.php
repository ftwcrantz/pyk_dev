<?php get_header( ); ?>

<?php $the_query = new WP_Query( 'pagename=philosophy' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row">
    <a href="#philosophy-container" data-toggler-group="toggler" data-toggler-group="toggla" class="image-text main-link mini-toggler">
      <img class="desktop-only" src="<?php the_post_thumbnail_url(); ?>"/>
      <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>"/>
      <p class="shadow"><?php echo get_post_meta($post->ID, 'bildtext', true); ?></p>
    </a>
    <div id="philosophy-container" class="sub-sites hidden">
      <article class="post">
        <?php the_content(); ?>
        <?php $children = get_pages( 
          array(
            'sort_column' => 'menu_order',
            'sort_order' => 'ASC',
            'hierarchical' => 0,
            'parent' => $post->ID,
          ));
          foreach( $children as $post ) { 
            setup_postdata( $post ); ?>
          <a href="#<?php the_id(); ?>" class="sub-link mini-toggler"><?php the_title(); ?></a>
          <div id="<?php the_id(); ?>" class="sub-content hidden">
            <?php the_content(); ?>
          </div>  
        <?php } ?>
      </article>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=about-us' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row">
    <a href="#about-container" data-toggler-group="toggler" data-toggler-group="toggla" class="image-text main-link mini-toggler">
      <img class="desktop-only" src="<?php the_post_thumbnail_url(); ?>"/>
      <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>"/>
      <p><?php echo get_post_meta($post->ID, 'bildtext', true); ?></p>
    </a>
    <div id="about-container" class="sub-sites hidden">
      <?php the_content(); ?>
      <?php $children = get_pages( 
        array(
          'sort_column' => 'menu_order',
          'sort_order' => 'ASC',
          'hierarchical' => 0,
          'parent' => $post->ID,
        ));
        foreach( $children as $post ) { 
          setup_postdata( $post ); ?>
        <a href="#<?php the_id(); ?>" class="sub-link mini-toggler"><?php the_title(); ?></a>
        <div id="<?php the_id(); ?>" class="sub-content hidden">
          <?php the_content(); ?>
        </div>  
      <?php } ?>
    </div>
  </div>
</section>
<?php endwhile;?>



<?php $the_query = new WP_Query( 'pagename=projects' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row">
    <a href="#projects-container" data-toggler-group="toggler" data-toggler-group="toggla" class="image-text main-link mini-toggler">
      <img class="desktop-only" src="<?php the_post_thumbnail_url(); ?>"/>
      <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>"/>
      <p><?php echo get_post_meta($post->ID, 'bildtext', true); ?></p>
    </a>
    <div id="projects-container" class="sub-sites hidden">
      <?php the_content(); ?>
      <?php $children = get_pages( 
        array(
          'sort_column' => 'menu_order',
          'sort_order' => 'ASC',
          'hierarchical' => 0,
          'parent' => $post->ID,
        ));
        foreach( $children as $post ) { 
          setup_postdata( $post ); ?>
        <a href="#<?php the_id(); ?>" class="sub-link mini-toggler"><?php the_title(); ?></a>
        <div id="<?php the_id(); ?>" class="sub-content hidden">
          <?php the_content(); ?>
        </div>  
      <?php } ?>
    </div>
  </div>
</section>
<?php endwhile;?>


<section id="contact-segment" class="wrapper content-section">
  <div class="row">
    <div class="image-text">
      <img class="desktop-only" src="<?php echo get_template_directory_uri(); ?>/images/AoP_webbilder_4.jpg"/>
      <!-- <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>"/> -->
      <p class="contact-header">Contact</p>
      <div class="contact-info hidden">
        <span>info@ahnstrom&pyk.se</span>
      </div>
    </div>
  </div>
</section>


<!-- <?php $the_query = new WP_Query( 'pagename=about-us' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="one" class="wrapper content-section">
  <div class="row">
    <div class="image-text">
      <img class="desktop-only" src="<?php the_post_thumbnail_url(); ?>"/>
      <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>"/>
      <p><?php echo get_post_meta($post->ID, 'bildtext', true); ?></p>
    </div>
    <a href="#about-container" data-toggler-group="toggler" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title(); ?></a>
    <div id="about-container" class="sub-sites hidden">
      <?php the_content(); ?>
      <?php $children = get_pages( 
        array(
          'sort_column' => 'menu_order',
          'sort_order' => 'ASC',
          'hierarchical' => 0,
          'parent' => $post->ID,
        ));
        foreach( $children as $post ) { 
          setup_postdata( $post ); ?>
        <a href="#<?php the_id(); ?>" class="sub-link mini-toggler"><?php the_title(); ?></a>
        <div id="<?php the_id(); ?>" class="sub-content hidden">
          <?php the_content(); ?>
        </div>  
      <?php } ?>
    </div>
  </div>
</section>
<?php endwhile;?> -->


<!-- <?php $the_query = new WP_Query( 'pagename=our-people' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="two" class="wrapper content-section">
  <div class="row">
    <img class="desktop-only" src="<?php the_post_thumbnail_url(); ?>" />
    <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>" />
    <a href="#coworkers-container" data-toggler-group="toggler" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title(); ?></a>
    <?php endwhile;?>
    <div id="coworkers-container" class="sub-coworkers hidden">
      <ul class="gridder">
        <?php query_posts(array( 'post_type' => 'staff', 'showposts' => 100 ) ); ?>
        <?php while (have_posts()) : the_post(); ?>
        <li class="gridder-list" data-griddercontent="#gridder-content-<?php the_id(); ?>">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
          <div>
            <p class="coworkers-name"><?php the_title(); ?></p>
            <p class="coworkers-title"><?php echo the_field('title'); ?></p>
            <p class="coworkers-email">e-mail: <?php echo the_field('email'); ?></p>
            <p class="coworkers-tel">tel: <?php echo the_field('phone'); ?></p>
            <p class="coworkers-mobile">&nbsp;
              <?php if( get_field('mobile') ): ?>
                <?php echo "mobile: "; the_field('mobile'); ?>
              <?php endif; ?>
            </p>
            <p class="coworkers-linkedin">&nbsp;
              <?php if( get_field('linkedin') ): ?>
                <a href="http://<?php echo the_field('linkedin'); ?>"><?php echo the_field('linkedin'); ?></a></p>
              <?php endif; ?>
            </p>
            <span>Read more ></span>
          </div>
        </li>
        <?php endwhile;?>
      </ul>
      <?php query_posts(array( 'post_type' => 'staff', 'showposts' => 100 ) ); ?>
      <?php while (have_posts()) : the_post(); ?>
      <div id="gridder-content-<?php the_id(); ?>" class="coworkers-content">
        <?php the_content(); ?>
      </div>
      <?php endwhile;?>
    </div>
  </div>
</section>


<?php $the_query = new WP_Query( 'pagename=recruitment' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="three" class="wrapper content-section">
  <div class="row">
    <img class="desktop-only" src="<?php the_post_thumbnail_url(); ?>" />
    <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>" />
    <a href="#recruitment-container" data-toggler-group="toggler" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title(); ?></a>
    <div id="recruitment-container" class="sub-sites hidden">
      <?php the_content(); ?>
      <span class="border-bottom"></span>
    </div>
  </div>
</section>
<?php endwhile;?>


<?php $the_query = new WP_Query( 'pagename=contact' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="four" class="wrapper content-section">
  <div class="row">
    <img class="desktop-only" src="<?php the_post_thumbnail_url(); ?>" />
    <img class="mobile-only" src="<?php $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'mobile-image', $post->ID); $custom=wp_get_attachment_image_src($custom,'mobile image'); echo $custom[0]; ?>" />
    <a href="#contact-container" data-toggler-group="toggler" data-toggler-group="toggla" class="main-link mini-toggler"><?php the_title(); ?></a>
    <div id="contact-container" class="sub-sites sub-contact hidden">
      <?php the_content(); ?>
      <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2034.8887055339708!2d18.071388551659002!3d59.33481191753508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d5c9faaaaab%3A0x48f4bdaf0b95e7fb!2sNorburg+%26+Scherp+Advokatbyr%C3%A5+AB!5e0!3m2!1sen!2sse!4v1490709845489" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <span class="border-bottom"></span>
    </div>
  </div>
</section>
<?php endwhile;?>
 -->


<?php get_footer( ); ?>
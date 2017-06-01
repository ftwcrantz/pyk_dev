<?php
  /**
  * The template for displaying all pages.
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site will use a
  * different template.
  *
  * @package WordPress
  * @subpackage IBYT
  * @since IBYT 1.0
  */

  get_header( );
?>

<section class="first">
  <div class="wrapper">
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="type-super"><?php the_title(); ?></h1>
        <?php the_content()?>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer( ); ?>
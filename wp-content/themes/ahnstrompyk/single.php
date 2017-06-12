<?php
  get_header( );
?>

<section class="wrapper padding">
  <div class="row">
  <div class="single-column">
    <?php while ( have_posts() ) : the_post(); ?>
        <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><h1 class="type-super"><?php the_title(); ?></h1></a>
        <?php the_content()?>
    <?php endwhile; ?>
  </div>
  </div>
</section>

<?php get_footer( ); ?>

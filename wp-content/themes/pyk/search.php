<?php
/**
 * Search results page
 */
?>
<?php get_header( ); ?>
<div class="wrapper">
	<div class="row">

		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="box cf">
					<?php the_post_thumbnail('full'); ?>
					<a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
					<?php the_content()?>
				</div>
			<?php endwhile; ?>	
			<?php else: ?>
				<h1>Sorry, no results for '<?php echo get_search_query(); ?>'</h1>
			<?php endif; ?>

		</div>
	</div>


<?php get_footer(); ?>
<?php $the_query = new WP_Query( 'pagename=footer' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section id="footer" class="wrapper footer">
  <div class="row">
    <?php the_content(); ?>
  </div>
</section>
<?php endwhile;?>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.gridder.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smooth-scroll.js"></script>
<script>
  $(function() {
  
      // Call Gridder
      $('.gridder').gridderExpander({
          scroll: false,
          scrollOffset: 30,
          scrollTo: "panel",                  // panel or listitem
          animationSpeed: 400,
          animationEasing: "easeInOutExpo",
          showNav: false,                      // Show Navigation
          nextText: "Next",                   // Next button text
          prevText: "Previous",               // Previous button text
          closeText: "Close",                 // Close button text
          onStart: function(){
              //Gridder Inititialized
          },
          onContent: function(){
              //Gridder Content Loaded
          },
          onClosed: function(){
              //Gridder Closed
          }
      });
  
  });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fastclick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mini-toggler.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
<script>
    $(function() {
    FastClick.attach(document.body);
}); 
</script>
    <?php wp_footer(); ?>
</body>
</html>
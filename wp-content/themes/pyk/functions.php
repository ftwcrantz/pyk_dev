<?php
//remove toolbar for all except admin
add_action('after_setup_theme', 'remove_admin_bar');

//Remove admin bar
add_filter('show_admin_bar', '__return_false');

//Add support for menus
function register_my_menus() {
  register_nav_menus(
    array(
      'desktop' => __( 'Desktop Menu' ),
      'mobile' => __( 'Mobile Menu' ),
      'cta' => __( 'CTA Menu' ),
      'footer' => __( 'Footer Menu' ),
      'forum'  => __( 'Forum Menu'  ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Set thumbnail support
add_theme_support( 'post-thumbnails' );
add_image_size('resp-large', 720, 'auto');


add_action( 'init', 'my_add_excerpts_to_pages' );
  function my_add_excerpts_to_pages() {
  add_post_type_support( 'page', 'excerpt' );
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Mobil bild',
            'id' => 'mobile-image',
            'post_type' => 'page'
        )
    );
}

?>
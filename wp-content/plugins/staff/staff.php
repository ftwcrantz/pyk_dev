<?php
/*
Plugin Name: Staff Custom Post Types
Description: Custom Post Types for Staff page
Author: Malin Wincrantz
Author URI: http://www.malinwincrantz.com
*/

add_action( 'init', 'staff_cpt' );

function staff_cpt() {

register_post_type( 'staff', array(
  'labels' => array(
    'name' => 'Staff',
    'singular_name' => 'Staff',
   ),
  'description' => 'Staff that belongs to the company',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
));
}
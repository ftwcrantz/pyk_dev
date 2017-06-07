<?php
/*
Plugin Name: Projects Custom Post Types
Description: Custom Post Types for Projects
Author: Malin Wincrantz
Author URI: http://www.malinwincrantz.com
*/

add_action( 'init', 'projects_cpt' );

function projects_cpt() {

register_post_type( 'projects', array(
  'labels' => array(
    'name' => 'Projects',
    'singular_name' => 'Project',
   ),
  'description' => 'Projects',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
));
}
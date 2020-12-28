<?php

/*
Plugin Name: Artists
Plugin URI: http://tappingbones.com
Description: Plugin to register the Artist post type
Version: 1.0
Author: Greg Longo
Author URI:http://longo.io
Textdomain: tappingbones
License: GPLv2
*/

function register_artist() {
	$labels = array(
	 'name' => __( 'Artists', tappingbones ),
	 'singular_name' => __( 'Artist', tappingbones ),
	 'add_new' => __( 'New Artist', ‘kinsta’ ),
	 'add_new_item' => __( 'Add New Artist', ‘kinsta’ ),
	 'edit_item' => __( 'Edit Artist', ‘kinsta’ ),
	 'new_item' => __( 'New Artist', ‘kinsta’ ),
	 'view_item' => __( 'View Artist', ‘kinsta’ ),
	 'search_items' => __( 'Search Artists', ‘kinsta’ ),
	 'not_found' =>  __( 'No Artists Found', ‘kinsta’ ),
	 'not_found_in_trash' => __( 'No Artists found in Trash', ‘kinsta’ ),
	);
	$args = array(
	 'labels' => $labels,
	 'has_archive' => true,
	 'public' => true,
	 'hierarchical' => false,
	 'supports' => array(
	  'title',
	  'editor',
	  'excerpt',
	  'custom-fields',
	  'thumbnail',
	  'page-attributes'
	 ),
	 'taxonomies' => array('category'),
	 'rewrite'   => array( 'slug' => 'artist' ),
	 ‘show_in_rest’ => true
	);
	register_post_type( 'tappingbones_artist', $args );

}
add_action( 'init', 'register_artist' );


?>
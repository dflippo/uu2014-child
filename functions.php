<?php

/**
 * UU2014-Child functions and definitions
 *
 * @package UU2014-Child
 *
 */

/**
 * Enqueue scripts and styles
 */
function uu2014_child_scripts() {

	wp_enqueue_style('uu2014-child-style', get_template_directory_uri() . '/style.css', array('uu2014-style'), '2015-01-31');

	wp_enqueue_script('uu2014-child-script', get_template_directory_uri().'/functions.js', array('uu2014-script'), '2015-01-31');

}
add_action('wp_enqueue_scripts', 'uu2014_child_scripts');

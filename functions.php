<?php
/** 
 *Theme Name:   Twenty Nineteen Child Theme
 *description: A child theme of the Twenty Nineteen default WordPress theme
 *Author:       Nick Schäferhoff
 *Template:     twentynineteen
 *Version:      1.0.0
*/


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
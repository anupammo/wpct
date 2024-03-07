<?php
function lightning_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_parent_theme_file_uri( 'style.css' ) );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'lightning_child_enqueue_styles' );
?>
<?php
// Adds your styles to the WordPress editor
add_action( 'init', 'add_editor_styles' );
function add_editor_styles() {
    add_editor_style( get_stylesheet_directory_uri() . '/css/style.css' );
}